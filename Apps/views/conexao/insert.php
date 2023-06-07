<?php
    include_once 'conn.php';
    $success  = "";
    if(isset($_POST['add']))
    {	 
        $marca  = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $modelo = $_POST['amarzenamento'];
        $modelo = $_POST['ram'];
        $modelo = $_POST['processador'];
        $descricao   = $_POST['descricao'];
        
        $sql = "INSERT INTO dispositivos (marca,modelo,armazenamento,ram,processador,descricao)
        VALUES ('$marca','$modelo', '$armazenamento', '$ram', '$processador','$descricao')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "New record created successfully !";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>