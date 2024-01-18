<?php 
//Lab1
echo nl2br("This text is just for\n testing\n newline function.\n\n");
?>

<?php 
//Lab2

//Method 1 as required using foreach looping
foreach($_SERVER as $key => $value){
echo " [$key] =>  $value . '<br>'";
}

//Another method
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>


<?php 
//Lab3

//Array 
$arr = [12, 45, 10, 25];

//Array Sum
$sum = array_sum($arr);
echo "Array sum = $sum <br>";

//Array Avg
$avg = $sum / count($arr);
echo "Array avg = $avg <br>";

//Array reverse order
$sort = rsort($arr);
echo "Reverse order array = " ;
print_r($arr);
echo '<br><br>';
?>




<?php 
//Lab4
$arr2 = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40,);

//a) Ascending order sort by value:
asort($arr2);
echo "a) Ascending order sort by value:";
print_r($arr2);
echo '<br>';

//b) Ascending order sort by key:
ksort($arr2);
echo "b) Ascending order sort by key:";
print_r($arr2);
echo '<br>';

//c) Descending order sort by value:
arsort($arr2);
echo "c) Descending order sort by value:\n";
print_r($arr2);
echo '<br>';


//d) Descending order sort by key:
krsort($arr2);
echo "d) Descending order sort by key:\n";
print_r($arr2);
echo '<br>';


?>