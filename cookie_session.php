<!DOCTYPE html>
<html>
    <body>
        <?php
        
        $name = "Cookie";
        $value = 100;
        $expire = time() + (60 * 60 * 24 * 7);

        setcookie($name, $value, $expire);    // Cookie

        session_start();   // Session
        
        
        ?>
    </body>
</html>