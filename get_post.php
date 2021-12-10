<!DOCTYPE html>
<html>
    <body>
        <?php 

        if (isset($_GET['submit'])){

            echo "GET information" . $_GET['name'] . " " . $_GET['age'];     // GET method
        }
        
        if (isset($_POST['submit1'])){

            echo "POST information" . $_POST['name1'] . " " . $_POST['age1'];  // POST method
        }
        
        
        ?>

        <form action="get_post.php" method="GET">

        Name: <input type="text" name="name">
        Age: <input type="number" name="age">
        <input type="submit" name="submit">

        <form action="get_post.php" method="POST">

        Name: <input type="text" name="name1">
        Age: <input type="number" name="age1">
        <input type="submit" name="submit1">

        </form>
    </body>
</html>