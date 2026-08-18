<?php
    $a = 12.5;
    $b = "Hello World";

    // check datatype variable a
    var_dump($a);
    echo "<br>";
    // check datatype variable b
    var_dump($b);
?>


<form action="" method="post">
    value 1: <input type="number" name="val1">
    <br>
    value 2: <input type="number" name="val2">
    <br>
    <input type="submit" value="Save">
</form>
<?php
    $value1 = $_POST['val1'];
    $value2 = $_POST['val2'];

    var_dump($value1);
    if($value1 === 2){
        echo "You enter correct number";
    }

    // echo $value1 + $value2;
?>