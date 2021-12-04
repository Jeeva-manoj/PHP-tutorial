<!DOCTYPE html>
<html>
    <body>
        <?php 
        
        function greet(){
            echo "Hello" . "<br>";    //function
        }

        greet();
        
        function add($num1, $num2){
            $sum = $num1 + $num2;      //function with parameters
            echo $sum . "<br>";
        }

        add(2,4);

        function mul($num1, $num2){
            $product = $num1 * $num2;   //function with return
            return $product;
        }

        $result = mul(2,4);
        echo $result . "<br>";

        $number = 1;   //global variable

        function change($num){
            $number = $num;     //local variable
        }

        change(2);

        echo $number;       
        
              
        
        ?>
    </body>
</html>