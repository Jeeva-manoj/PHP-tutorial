<!DOCTYPE html>
<html>
    <body>
        <?php 
        

        if (isset($_POST['submit'])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            $connection = mysqli_connect('localhost', 'root', '', 'login');  // Creating connection

            if (!$connection){
                echo "Connection failed" . mysqli_connect_error();  // Checking connection
              }

            $query = "DELETE from users WHERE id=1";  // Deleting data

            if (mysqli_query($connection, $query)){
                echo "Record deleted successfully";
            }else{
                echo "Error deleting record" . mysqli_error($connection);
            }
            
            

        }      
        
        
        ?>

        <form action="mysql_connection.php" method="post">
            <input name="username" placeholder="Enter Username" type="text">
            <input name="password" placeholder="Enter password" type="password">
            <input name="submit" type="submit">

        </form>
    </body>
</html>