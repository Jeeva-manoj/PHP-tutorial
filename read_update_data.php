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

            $query = "SELECT id, username, password FROM users";   // Selecting data
            $result = mysqli_query($connection, $query);   

            while ($row == mysqli_fetch_assoc($result)){
                echo $row['id'] . " ". $row['username']. " " . $row['password'];   // Reading data
            }

            $query1 = "UPDATE users SET username='John' WHERE id=2";  // Updating data

            if (mysqli_query($connection, $query1)){
                echo "Data updated successfully";
            }else{
                echo "Update failed" . mysqli_error($connection);
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