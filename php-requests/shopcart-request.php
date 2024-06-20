<?php
if (isset($_SESSION['email'])) {
    $user_email = $_SESSION['email'];

    $servername_carrinho = "localhost";
    $username_carrinho = "root";
    $password_carrinho = "";
    $dbname_carrinho = "users";

    $servername_produtos = "localhost";
    $username_produtos = "root";
    $password_produtos = "";
    $dbname_produtos = "himperius-produtos";

    $conn_carrinho = new mysqli($servername_carrinho, $username_carrinho, $password_carrinho, $dbname_carrinho);

    if ($conn_carrinho->connect_error) {
        die("Conexão falhou: " . $conn_carrinho->connect_error);
    }

    $conn_produtos = new mysqli($servername_produtos, $username_produtos, $password_produtos, $dbname_produtos);

    if ($conn_produtos->connect_error) {
        die("Conexão falhou: " . $conn_produtos->connect_error);
    }

    if (isset($_POST['update_quantidade']) && isset($_POST['produto_id'])) {
        $produto_id = $_POST['produto_id'];
        $nova_quantidade = isset($_POST['nova_quantidade']) ? $_POST['nova_quantidade'] : null;
        $sql_update = "UPDATE carrinho SET quantidade = ? WHERE id_produto = ? AND email_usuario = ?";
        $stmt = $conn_carrinho->prepare($sql_update);

        if ($stmt === false) {
            die("Erro ao preparar a consulta: " . $conn_carrinho->error);
        }

        $stmt->bind_param("iis", $nova_quantidade, $produto_id, $user_email);

        if ($stmt->execute() === false) {
            echo "Erro ao atualizar a quantidade: " . $stmt->error;
        }

        $stmt->close();
    }

    if (isset($_POST['remover_produto']) && isset($_POST['produto_id'])) {
        $produto_id = $_POST['produto_id'];
        $sql_delete = "DELETE FROM carrinho WHERE id_produto = ? AND email_usuario = ?";
        $stmt = $conn_carrinho->prepare($sql_delete);

        if ($stmt === false) {
            die("Erro ao preparar a consulta: " . $conn_carrinho->error);
        }

        $stmt->bind_param("is", $produto_id, $user_email);

        if ($stmt->execute() === false) {
            echo "Erro ao remover o produto: " . $stmt->error;
        }

        $stmt->close();
    }

    $sql_carrinho = "SELECT id_produto, quantidade FROM carrinho WHERE email_usuario = '$user_email'";
    $result_carrinho = $conn_carrinho->query($sql_carrinho);

    if ($result_carrinho === false) {
        die("Erro na consulta do carrinho: " . $conn_carrinho->error);
    }

    if ($result_carrinho->num_rows > 0) {
        echo '<div class="row">';
        
        while ($row = $result_carrinho->fetch_assoc()) {
            $id_produto = $row['id_produto'];
            $quantidade = $row['quantidade'];

            $sql_produto = "SELECT nome, preco, descricao, imagem, estoque FROM produtos WHERE id = $id_produto";
            $result_produto = $conn_produtos->query($sql_produto);

            if ($result_produto === false) {
                die("Erro na consulta do produto: " . $conn_produtos->error);
            }

            if ($result_produto->num_rows > 0) {
                $produto = $result_produto->fetch_assoc();
                $nome_produto = $produto['nome'];
                $preco_produto = $produto['preco'];
                $descricao_produto = $produto['descricao'];
                $imagem_produto = $produto['imagem'];
                $em_estoque = $produto['estoque'];

                echo '<div class="produto-item col-lg-12 mb-4">';
                echo '<div class="row">';
                echo '<div class="col-lg-3">';
                echo '<img class="img-fluid" src="../product-images/' . $imagem_produto . '" alt="' . $nome_produto . '" style="width: 250px; height: 300px;">';
                echo '</div>';
                echo '<div class="col-lg-9">';
                echo "<h5>$nome_produto</h5>";
                echo "<p>$descricao_produto</p>";
                echo "<p>Preço: $preco_produto</p>";
                echo "<p>No seu carrinho: $quantidade</p>";
                echo "<p>Em estoque: $em_estoque</p>";
                
                echo '<form class="form-inline mt-3" method="post" action="">';
                echo '<input type="hidden" name="produto_id" value="' . $id_produto . '">';
                
                echo '<button type="submit" name="update_quantidade" value="' . ($quantidade + 1) . '" class="btn btn-success mr-2">Adicionar mais um</button>';

                if ($quantidade > 1) {
                    echo '<button type="submit" name="update_quantidade" value="' . ($quantidade - 1) . '" class="btn btn-danger mr-2">Remover um</button>';
                } else {
                    echo '<button type="submit" name="remover_produto" class="btn btn-danger mr-2">Remover um</button>';
                }
                
                

                echo '<button type="submit" name="remover_produto" class="btn btn-danger">Remover do Carrinho</button>';
                
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }

        echo '</div>';
    } else {
        echo '<p>O carrinho está vazio.</p>';
    }

    $conn_carrinho->close();
    $conn_produtos->close();
} else {
    echo '<p>Erro: Email do usuário não encontrado na sessão.</p>';
}
?>
