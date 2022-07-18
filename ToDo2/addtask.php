<?php
include_once 'config.php';


if(isset($_POST['save'])){
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $description = $_POST['description'];
    $done = $_POST['done'];
    $priority = $_POST['priority'];
    $tags = $_POST['tags'];
    

    $sql ="INSERT INTO tasks (title, start, end, description, tags,priority, done ) VALUES (:title, :start, :end, :description,:tags, :priority,:done )";

    $prep = $con->prepare($sql);

    $prep->bindParam(':title', $title);
    $prep->bindParam(':start', $start);
    $prep->bindParam(':end', $end);
    $prep->bindParam(':description', $description);
    $prep->bindParam(':done', $done);
    $prep->bindParam(':priority', $priority);
    $prep->bindParam(':tags', $tags);

    $prep->execute();

    header('Location: index.php');
}
?>
