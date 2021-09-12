<?php
    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo $email;

    $sql = $pdo->prepare("INSERT INTO `contato` VALUES (null, ?, ?)");
    $sql->execute(array($name, $email));
?>