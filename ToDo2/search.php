<?php
include_once 'config.php';

if (isset($_POST['search'])) {

    $searchRequest = $_POST['search-box'];
  

    $sql="SELECT * FROM tasks WHERE title LIKE '{$searchRequest}' ";
}

?>