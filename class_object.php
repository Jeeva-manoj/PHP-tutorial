<!DOCTYPE html>
<html>
    <body>
        <?php
        
        class Fruit{

            public $name;     // properties
            public $color;

            function get_name(){
                return $this -> name;     // methods
            }

            function set_name($name){
                $this->name = $name;
            }

        }

        $apple = new Fruit();     // Object
        $apple->set_name('Apple');

        echo $apple->get_name();
        
        
        ?>
    </body>
</html>