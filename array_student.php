<!DOCTYPE html>
<html>
<head>
  <title>PHP Student Array Example</title>
</head>
<body>
  <h2>List of Students</h2>
<?php
$students = array("Siddharth", "Ananya", "Rohan", "Priya", "Amit", "Ashish", "Praveen");

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr><th>Sr. No.</th><th>Student Name</th></tr>";

$count = 1; 
foreach ($students as $name) {
    echo "<tr><td>$count</td><td>$name</td></tr>";
    $count++;
}

echo "</table>";
?>

</body>
</html>
