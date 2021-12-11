<!DOCTYPE html>
<html>
    <body>
        <?php
        
        class Greet {
            public $name;   
          
            public function __construct($name) {
              $this->name = $name;           
            }
            public function greeting() {
              return "Hello" . " " . $this->name;
            }
          }
          
        class Greet1 extends Greet{     // Inherited class
                                    

        }

        $world = new Greet1("World");
        echo $world->greeting();
        
        
        ?>
    </body>
</html>