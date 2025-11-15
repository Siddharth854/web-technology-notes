<?php
$text = "Siddharth";
$i = 100;
$f = 3.1416;
$b = true;
$temp = NULL;

var_dump($i);
echo "<br/>";
var_dump($text);
echo "<br/>";
var_dump($f);
echo "<br/>";
var_dump($b);
echo "<br/>";
var_dump($temp);
echo "<br/>";

$arr = array(10,20.22,"siddharth",40,50); 
echo var_dump($arr);
echo "<br/>";
$student = array("name" => "Siddharth", "age" => 21, "course" => "MCA");
echo var_dump($student);

foreach($arr as $elem)
{
    echo "$elem <br/>";
}


$arr = array(array(10,20,30),array(30,50,60),array(70,80,90));
echo "<table boy/rder='1'>";
for($i = 0; $i < count($arr); $i++)
{
    for($j = 0; $j< count($arr[$i]); $j++)
    {
        echo "<td>".$arr[$i][$j]."</td>";
    }
    echo "<tr/>";
}

echo "</table>";
echo "<br/><br/>";
$p_Arr = array(
    array(11, 12, 13, 14),
    array(15, 16, 17, 18)
);

echo "<table border='1'>";

for ($k = 0; $k < count($p_Arr); $k++) {
    echo "<tr>"; // Start a new table row
    
    // ❌ You used count($p_Arr[$l]) — that should be count($p_Arr[$k])
    for ($l = 0; $l < count($p_Arr[$k]); $l++) {
        echo "<td>" . $p_Arr[$k][$l] . "</td>";
    }

    echo "</tr>"; // End the table row
}

echo "</table>";
?>
