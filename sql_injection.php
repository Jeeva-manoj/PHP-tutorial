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

            $username = mysqli_real_escape_string($connection, $username);   // Preventing SQL injection
            $password = mysqli_real_escape_string($connection, $password);
            
            

        }      
        
        
        ?>

        <form action="mysql_connection.php" method="post">
            <input name="username" placeholder="Enter Username" type="text">
            <input name="password" placeholder="Enter password" type="password">
            <input name="submit" type="submit">

        </form>
    </body>
</html>