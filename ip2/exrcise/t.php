<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  private $name;
  public $color;

  public function __construct($n,$c) {
     $this->name = $n; 
          $this->color = $c;
 }
  function get_name() {
    return $this->name;
  }
  public function __get($name){
  return $this->name;
  }
 
}


?>
 
</body>
</html>
