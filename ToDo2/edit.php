<?php
include_once 'config.php';
if(isset($_POST['donee'])){

    $id = $_POST['id'];

    $sql = "UPDATE tasks SET done='yes' WHERE id=:id ";

    $prep = $con->prepare($sql);

    $prep->bindParam(":id", $id);
    

    $prep->execute();
    header("Location: index.php");
}
else if(isset($_POST['priorityy'])){

    $id = $_POST['id'];

    $sql = $sql = "UPDATE tasks SET priority='yes' WHERE id=:id ";

    $prep = $con->prepare($sql);

     $prep->bindParam(":id", $id);

    $prep->execute();
    header("Location: index.php");
}
?>
