<?php 
$fruits = array("Apple", "Banana", "Orange");

echo "First fruit: " . $fruits[0] . "<br>" ;

$fruits[]="grapes";
echo end($fruits). "<br>" ;  

$numFruits = count($fruits);
echo "Number of fruits: " . $numFruits . "<br>"; 

print_r($fruits);
?>