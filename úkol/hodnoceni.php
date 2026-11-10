<?php
$studentname = "Rodney Stewart";

$test1 = 75;
$test2 = 90;
$test3 = 60;

$total = $test1 + $test2 + $test3;
$prumer = ($test1 + $test2 + $test3) / 3;

if($test1 >= 90){
    $znamka1 = 1;
}
else if($test1 >= 75 && $test1 < 90){
    $znamka1 = 2;}
else if($test1 >= 60 && $test1 < 75){
    $znamka1 = 3;}
else if($test1 >= 40&& $test1 < 60){
    $znamka1 = 4;}
else {
    $znamka1 = 5;
}

if($test2 >= 90){
    $znamka2 = 1;
}
else if($test2 >= 75 && $test2 < 90){
    $znamka2 = 2;}
else if($test2 >= 60 && $test2 < 75){
    $znamka2 = 3;}
else if($test2 >= 40&& $test2 < 60){
    $znamka2 = 4;}
else {
    $znamka12 = 5;
}

if($test3 >= 90){
    $znamka3 = 1;
}
else if($test3 >= 75 && $test3 < 90){
    $znamka3 = 2;}
else if($test3 >= 60 && $test3 < 75){
    $znamka3 = 3;}
else if($test3 >= 40&& $test3 < 60){
    $znamka3 = 4;}
else {
    $znamka3 = 5;
}

echo "<h1> hodnocení studenta</h1>";
echo"<p>$studentname</p>";
//echo "<br>";
echo "<p>$test1</p>";
//echo "<br>";
echo "<p>$test2</p>";
//echo "<br>";
echo "<p>$test3</p>";
//echo "<br>";
echo "<p>$total</p>";
//echo "<br>";
?>