<?php
// Indexed array
$arr = ["Asus", 2, "ROG", 2300, 2026, "PC", "IT"];
foreach($arr as $v){
    echo $v . "<br>";
}
echo "<br>";

sort($arr); // តំរៀបទិន្នន័យតាមលំដាប់ពីតូចទៅធំ
foreach($arr as $v){
    echo $v . "<br>";
}
echo "<br>";

$test = ["A", "2Z", "B", "11A", "AA", "AD"];
sort($test); // Fixed: Changed $arr to $test
foreach($test as $v){
    echo $v . "<br>";
}
echo "<br>";

// Associative array
$assoc = [
    "name" => "Keo Kanha",
    "age" => 20,
    "subject" => "Web",
    "score" => 100,
    "semester" => 2
];

foreach($assoc as $k => $v){
    echo $k . "=" . $v . "<br>";
}
echo "===========<br>";

ksort($assoc); // Sorts by key (A-Z)
foreach($assoc as $k => $v){
    echo $k . "=" . $v . "<br>";
}
echo "===========<br>";

asort($assoc); // Sorts by value (Ascending)
foreach($assoc as $k => $v){
    echo $k . "=" . $v . "<br>";
}
?>