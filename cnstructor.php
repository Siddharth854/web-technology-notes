<?php
class MyClass {
    private $brand;
    private $color;

    public function __construct($brand, $color="none") {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function get_Brand() {
        return $this->brand;
    }

    public function set_Brand($brand) {
        $this->brand = $brand;
    }

        public function get_Color() {
        return $this->color;
    }

    public function set_Color($color) {
        $this->color = $color;
    }

    public function getCarInfo() {
        return "Brand: " . $this->brand . " , Color: " . $this->color;
    }
}

$car01 = new MyClass("BMW");

$car01->set_Brand("Volvo");
$car01->set_Color("White");

echo $car01->get_Brand();  
echo "<br>";
echo $car01->get_Color();  
echo "<br>";

echo $car01->getCarInfo();
?>
