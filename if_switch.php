<!DOCTYPE html>
<html>
    <body>
        <?php

        $x = 2;
        
        if ($x == 1){
            echo "X value is 1" . "<br>";                  //if statement
        }
        elseif ($x == 2){
            echo "X value is 2" . "<br>";
        }
        else{
            echo "X value is not 1 or 2" . "<br>";
        }


        $y = 20;

        switch($y){

            case 30:
                echo "Y value is 30";                    //switch statement
                break;

            case 20:
                echo "Y value is 20";
                break;

            case 10:
                echo "Y value is 10";
                break;

            default:
                echo "Y value is not 10, 20 or 30";


        }      
                       
                
        ?>
    </body>
</html>