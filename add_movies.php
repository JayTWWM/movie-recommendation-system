<?php
    session_start();
    if(isset($_GET['id'])){
        $_SESSION['id'] = $_GET['id'];
    }
include("header.php");
include("db.php");

    $flag= 0;

    if(isset($_POST['submit'])){
       $result =  mysqli_query($con,"insert into user_movies(user_id,movie_name,movie_rating)values('$_SESSION[id]','$_POST[movie_name]','$_POST[movie_rating]')");
        if($result){
            $flag = 1;
            
        }
        
    }
?>

<div class = "panel panel-default">
    <div class = "panel-heading">
    <h2>
    <a class = "btn btn-success" href="add.php">Add Movies</a>
    <a class = "btn btn-info pull-right" href="index.php">Back</a>
    </h2>
    </div>

    <?php if($flag){ ?>
        <div class = "alert alert-success">Movie Successfully Added in Database</div>
        <?php $flag = 0 ?>
    <?php } ?>


    <div class = "panel-body">
    
    <form action = "add_movies.php" method = "post">

        <div class = "form-group">
        <label for = "username">Movie Name</label>
        <input type = "text" name = "movie_name" id = "movie_name" class = "form-control" required>    
        </div>

        <div class = "form-group">
        <label for = "username">Movie Rating</label>
        <input type = "number" min = "1" max = "5" name = "movie_rating" id = "movie_rating" class = "form-control" required>    
        </div>

        <div class = "form-group">
        <input type = "submit" name = "submit" value = "submit" class = "btn btn-primary" required>
        </div>
    </div>
</div>