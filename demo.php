<?php

    // function display()
    // {
    //     echo "Hello from Siddharth!";
    // }
    
    // function name_display($name)
    // {
    //     echo "Hello $name welcome to PHP programming.";
    // }

    // function add_two_number($x,$y)
    // {
    //     echo "The sum is: ", $x+$y;
    // }

// display();
// echo "</br>";
// name_display("Siddharth");
// echo "</br>";
// add_two_number(12,19);
//pointer
$x = 10;
function display(&$y)
{
    $y++;
    echo "Y = ". $y;
}
display($x);
echo "<br/> X = ". $x;
?>