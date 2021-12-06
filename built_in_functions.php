<!DOCTYPE html>
<html>
    <body>
        <?php
        
        $number = 2.4;

        echo round($number) . "<br>";        //math functions
        echo ceil($number) . "<br>";
        echo floor($number) . "<br>";
        echo sqrt($number) . "<br>";
        echo rand(1,100) . "<br>";

        $string = "Hello";

        echo strlen($string) . "<br>";        //string functions
        echo strtoupper($string) . "<br>";
        echo strtolower($string) . "<br>";

        $list = [1,3,2,4,5];
      
        echo sizeof($list) . "<br>";     //array functions
        sort($list);
        print_r($list);
        echo "<br>";
        echo in_array(2, $list) . "<br>";            
        
        
        
        ?>
    </body>
</html>