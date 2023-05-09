<?php
    include_once('config.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        if (empty($username) || empty($password) || empty($nome) || empty($email)) {
            echo "<script>alert('Por favor preencha todos campos')</script>";
            return false;
        }

        // Criptografar a senha usando password_hash()
        $password_hash = password_hash($password, PASSWORD_DEFAULT);


        $result = mysqli_query($conexao, "INSERT INTO users (id, username, password, nome, email) VALUES (null, '$username', '$password_hash', '$nome', '$email')");

        if ($result) {
            echo "Dados inseridos com sucesso.";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($conexao);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="sistema.php" method="POST">
        <div class="box">
            <fieldset>

                <legend>Dados do Usuario</legend>
                <div class="inputBox">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
<br>
                <div class="inputBox">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
<br>
                <div class="inputBox">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome">
                </div>
<br>
                <div class="inputBox">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>
<br>

                <div class="inputBox">
                    <input type="submit" value="Enviar">
                </div>
            </fieldset>
        </div>
    </form>
</body>
</html>
