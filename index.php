<?php
include('header.php');
include('db.php');

?>

<div class = "panel panel-default">
    
    <div class = "panel-heading">
        <h2>
        <a class = "btn btn-success" href="add_user.php">Add Users</a>
        <a class = "btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>

    <div class = "panel-body">
        <table class = "table table-striped">
        <th>Username</th>
        <th>Add Movies</th>
        <th>Show Movies</th>
        <th>Show Recommendations</th>
        
        <?php $result = mysqli_query($con,"select * from users"); 
        while($row = mysqli_fetch_array($result)){?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td>
                <form action = "add_movies.php">
                    <input type = "submit" name = "add_movies" class = "btn btn-primary" value = "Add Movies">
                    <input type = "hidden" name = "id" value = "<?php echo $row["id"] ?>">
                </form>
                </td>

                <td>
                <form action = "show_movies.php">
                    <input type = "submit" name = "show_movies" class = "btn btn-primary" value = "Show Movies">
                    <input type = "hidden" name = "id" value = "<?php echo $row["id"] ?>">
                </form>
                </td>

                <td>
                <form action = "user_recommendation.php">
                    <input type = "submit" name = "show_movies" class = "btn btn-primary" value = "Show Recommendations">
                    <input type = "hidden" name = "id" value = "<?php echo $row["id"] ?>">
                </form>
                </td>

            </tr>
        <?php } ?>
        </table>
    </div>
</div>

