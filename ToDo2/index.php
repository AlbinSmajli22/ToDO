<?php
include_once 'config.php';


$sql="SELECT * FROM tasks";


if(isset($_POST['all'])){
$sql="SELECT * FROM tasks";
}

if (isset($_POST['search'])) {

    $searchRequest = $_POST['search-box'];
  
    $sql="SELECT * FROM tasks WHERE title LIKE '{$searchRequest}' ";
}

if (isset($_POST['today'])) {
  
    $todaysDate = date("Y-m-d");

    $sql="SELECT * FROM tasks WHERE end LIKE '{$todaysDate}' ";
}
if (isset($_POST['done'])) {

    $sql="SELECT * FROM tasks WHERE done LIKE 'yes' ";
}
if (isset($_POST['priority'])) {

    $sql="SELECT * FROM tasks WHERE priority LIKE 'yes' ";
}
    $prep = $con->prepare($sql);
	$prep->execute();
	$datas = $prep->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ca239450f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>To Do List</title>
</head>
<body>
    <header>

    <div id="title">
        <i class="fa-regular fa-square-check"></i>
        <a href="index.php" style="text-decoration:none;"><h3>To-Do</h3></a>
    </div>
    <div id="search">
        <form  method="post" id="searchform">
        <input type="search" name="search-box" id="search" placeholder="Search for a todo">
        <button type="submit" name="search">
        <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        </form>
    </div>
    </header>
<div id="main">
    <aside>
        <button type="submit" id="addtodo">ADD TO-DO</button> <br>
            <div id="All">
            <form action="" method="post">
                <i class="fa-solid fa-list"></i>
                <input class="filter" name="all" type="submit" value="All">
                </form>
            </div>
           
                <h5>FILTERS</h5>
                <div>
                <form action="" method="post">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <input class="filter" name="priority" type="submit" value="Priority">
                    </form>
                </div>
                <div>
                    <form action="" method="post">
                    <i class="fa-regular fa-clock"></i>
                    <input class="filter" type="submit" name="scheduled" value="Scheduled">
                    </form>
                </div>
                <div>
                    <form action="" method="post">
                    <i class="fa-regular fa-calendar"></i>
                    <input class="filter" type="submit" name="today" value="Today">
                    </form>
                </div>
                <div>
                    <form action="" method="post">
                    <i class="fa-solid fa-check"></i>
                    <input class="filter" type="submit" name="done" value="Done">
                    </form>
                </div>
            
      
            <div style="display:flex; flex-direction:row; justify-content:space-between;">
                <h5>TAGS</h5>
                <i class="fa-solid fa-circle-plus"></i>
            </div>
            <div>
                <i class="fa-solid fa-tag"></i>
                <span>Frontend</span>
            </div>
            <div>
                <i class="fa-solid fa-tag"></i>
                <span>Backend</span>
            </div>
    </aside>
    <div id="todos">
        <div id="list">
            <?php foreach($datas as $data): ?>
                <div class="tasku">
                    <div style="display:flex; flex-direction:row; align-items:center;">
                        <div style="margin-right:30px; margin-left:30px;">
                            <i class="fa-solid fa-grip-lines"></i>
                        </div>
                    <div>
                        <h4><?= $data['title'] ?></h4>
                        <p><?= $data['description'] ?></p>
                        <p id="tags"><?= $data['tags'] ?></p>
                    </div>
                    </div>
                    <div id="opsione">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <i class="fa-regular fa-star"></i>
                        <a style="text-decoration:none; color:black;" href="delete.php?id=<?= $data['id']; ?>"> <i class="fa-regular fa-trash-can"></i></a>
                        <a href="#mark-as-done?id=<?= $data['id']; ?>"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="form">
            <div id="mark-as-done">
                <form id="markAsDoneF" action="edit.php" method='post'>
                    <div>
                        <button type="submit"  name="donee"><i class="fa-regular fa-square-check"></i>Mark as Done</button>
                    </div>
                    <div>
                        <button type="submit" name="priorityy">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            </button>
                        <button type="submit" name="favorite">
                            <i class="fa-regular fa-star"></i>
                        </button>
                        <button type="submit" name="tagss">
                            <i class="fa-solid fa-tag"></i>
                        </button>
                        <button type="submit" name="deletee">
                        <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div id="add">
                <form action="addtask.php" method="post">
                    
                    <input type="text" name="title" id="todo-title" placeholder="Title*"><br>
                    <div>
                        <input type="date" name="start" id="start" >
                        <input type="date" name="end" id="end">
                    </div><br>
                        <input type="text" name="description" id="description"  placeholder="Notes*"><br>
                    <div style="display:none;">
                        <input type="text" name="done" id="description"  value="no">
                        <input type="text" name="priority" id="description"  value="no">
                        <input type="text" name="tags" id="description"  value="no">
                    </div>
                    <button type="submit" name="save" id="Save">Save</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="index.js"></script>
</body>
</html>