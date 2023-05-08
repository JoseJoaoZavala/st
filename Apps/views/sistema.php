<?php
 
        include_once('config.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // if (empty($_POST['username']) || empty($_POST['password']) empty($_POST['nome']) empty($_POST['email'])) {
        //     echo "<script>alert('Por favor prencha todos campos')</script>";
        //     return false;
        // }

        $result = mysqli_query($conexao, ' INSERT INTO users(username, password, nome, email) VALUES ($username, $password, $nome, $email)');
        
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        $password = $_POST['password'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
            

        }

    // $stmt->bindParam(':username', $username);
    // $stmt->bindParam(':password', $passorword);
    // $stmt->bindParam(':nome', $nome);
    // $stmt->bindParam(':email', $email);
    
    // if($stmt->execute()){
    //     echo "Dados inseridos com sucesso.";
    // }else {
    //     echo "erro ao inserir dados";
    // }
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
    <form action="sistema.html" method="POST">
        

        <div class="box">
            <fieldset>
                <div class="inputBox">

                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
              
                </div>

                <div class="inputBox">

                    <label for="password">Password</label>
        <input type="password" id="password" name="password">

                </div>

                <div class="inputBox">

                    <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
                    
                </div>

                <div class="inputBox">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                    
                </div>

                <div class="inputBox">
                    <input type="submit" value="Enviar">
                    
                </div>
            </fieldset>
        </div>

    </form>
</body>
</html>