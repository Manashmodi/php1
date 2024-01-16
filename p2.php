<?php
$name = "modi";
$age = 22;
$height = 180;
$is_student = true;

echo "<h2>$name\n</h2>";
echo "<h2>$age\n</h2>";
echo "<h2>$height\n</h2>";
echo "<h2>Is Student? " . ($is_student ? 'Yes' : 'No') . "\n</h2>";


$result_addition = $age + 5;
$result_subtraction = $height - 10.5;
$result_multiplication = $age * 10;
$result_division = $height / 2;
$result_modulus = $height % $age;

$age += 1;
$height -= 5.0;

echo "<h5>\nAge after increment: $age\n</h5>";
echo "<h5>Height after decrement: $height\n</h5>";
echo "<h5>Result of addition: $result_addition\n</h5>";
echo "<h5>Result of subtraction: $result_subtraction\n</h5>";
echo "<h5>Result of multiplication: $result_multiplication\n</h5>";
echo "<h5>Result of division: $result_division\n</h5>";
echo "<h5>Result of modulus: $result_modulus\n</h5>";

?>