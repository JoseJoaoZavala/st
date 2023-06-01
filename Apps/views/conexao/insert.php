<?php
    include_once 'conn.php';
    $success  = "";
    if(isset($_POST['add']))
    {	 
        $marca  = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $descricao   = $_POST['descricao'];
        
        $sql = "INSERT INTO dispositivos (marca,modelo,descricao)
        VALUES ('$marca','$modelo','$descricao')";
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