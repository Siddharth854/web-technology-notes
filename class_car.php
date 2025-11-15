<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name,$color) {
    $this->name = $name;
    $this->color = $color;
    echo "constructor for Fruit created .<br>";
  }
  function __destructor($name,$color)
  {
    echo "destructor for Fruit called .<br>";
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple","Red");
echo $apple->get_name()."<br>";
echo $apple->get_color()."<br>";

?>
