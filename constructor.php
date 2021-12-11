<!DOCTYPE html>
<html>
    <body>
        <?php
        
        class Fruits {
            public $name;   
            public $color;
          
            function __construct($name) {
              $this->name = $name;           // Constructor function
            }
            function get_name() {
              return $this->name;
            }
          }
          
          $apple = new Fruits("Apple");  
          
          echo $apple->get_name();
        
        
        ?>
    </body>
</html>