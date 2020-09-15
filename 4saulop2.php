<?php
    session_start();
    $nome = $_POST['nome'];
    echo $nome . "<br>";
    $cpf = $_POST['cpf'];
    echo $cpf . "<br>";
    $email = $_POST['email'];
    echo $email . "<br>";
    $mensagem = $_POST['mensagem'];
    echo $mensagem . "<br>";
    echo "<br>";
    if(empty($_POST['mensagem']))
    {
        echo "<p style='color: #f00;'>".'CAMPO MENSAGEM É OBRIGATÓRIO'."</p>";
        header('Refresh: 4; URL=3saulop2.php? msg=email');
    }

    if(substr_count($email, "@")!=1 || substr_count($email, ".")<1)
    {
        echo "<p style='color: #f00;'>".'E-MAIL INVÁLIDO'."</p>";
        header('Refresh: 4; URL=3saulop2.php? msg=email');
    }
    echo "Hobbies:";
    $hobbie = $_POST['hobbie'];
    echo "<pre>";
    print_r($hobbie);
    echo "</pre>";
    foreach($hobbie as $hob)
    {
        echo "<li>$hob";
    }
    echo "<br>";
    echo "<br>";
    $upload = $_FILES['arq']['name'];
    $temp = $_FILES['arq']['tmp_name'];
    move_uploaded_file($temp,time().".jpg");
    if(empty($_POST['arq']))
?>