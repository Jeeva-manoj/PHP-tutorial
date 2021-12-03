<!DOCTYPE html>
<html>
    <body>
        <?php 
        
        $counter = 0;

        while ($counter < 5){
            echo "Hello " . $counter . "<br>";   //while loop
            $counter++;
        }

        echo "<br>";

        for ($i = 0; $i < 5; $i++){
            echo "World " . $i . "<br>";  //for loop
        }   
        
        echo "<br>";

        $array = [1,2,3,4,5];

        foreach ($array as $arr){
            echo $arr . "<br>";      //foreach loop
        }
                        
                
        ?>
    </body>
</html>