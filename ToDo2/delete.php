<?php
    include_once 'config.php';

    $id=$_GET['id'];

    $sql = "DELETE FROM tasks WHERE id=:id";
    $prep = $con->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->execute();

    header("Location: index.php");

?>