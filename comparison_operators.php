<!DOCTYPE html>
<html>
    <body>
        <?php
        
        $x = 10;
        $y = 20;

        if (($x == 10) && ($y == 20)){   
            echo "Values are correct" . "<br>";       //Equal to and AND operator
        }
        elseif (($x != 10) && ($y != 20)){
            echo "Values are wrong" . "<br>";         //Not equal to and AND operator
        }
        elseif (($x == 10) || ($y == 20)){
            echo "One value is correct" . "<br>";     //Equal to and OR operator
        }
        
        
        if ($x === $y){
            echo "X and Y are equal and of same datatype";      //Identical operator
        }
        else {
            echo "X and Y are different";
        }
        
        
        
        ?>
    </body>
</html>