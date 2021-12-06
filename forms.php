<!DOCTYPE html>
<html>
    <body>
        <?php 
        

        if (isset($_POST['submit'])){
            echo "Username" . $_POST["username"] . "<br>";    //handling data
            echo "Password" . $_POST["password"];

            if (strlen($_POST['password']) < 6){
                echo "Password is too short";          //validating data
            }

        }      
        
        
        ?>

        <form action="forms.php" method="post">
            <input name="username" placeholder="Enter Username" type="text">
            <input name="password" placeholder="Enter password" type="password">
            <input name="submit" type="submit">

        </form>
    </body>
</html>