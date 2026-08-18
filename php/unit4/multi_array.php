<?php
    //create associative array automatic
    $orders = [
        ["name"=>"Keo Dara","phone"=>"096 123 4567","type"=>"Ice Latte", "size"=>"Medium","qty"=> 3,"price"=>3.5,"tax"=>0.1,"payment"=>50],
        ["name"=>"Sok Nita","phone"=>"096 123 0987","type"=>"Green Tea", "size"=>"Large","qty"=> 1,"price"=>2.5,"tax"=>0.01,"payment"=>20],
        ["name"=>"Seng Kakada","phone"=>"096 123 0987","type"=>"Americano", "size"=>"Small","qty"=> 1,"price"=>5.5,"tax"=>0.1,"payment"=>50],
        ["name"=>"Chan Samphos","phone"=>"096 123 0987","type"=>"Lemon Tea", "size"=>"Large","qty"=> 2,"price"=>4.5,"tax"=>0.1,"payment"=>100]
    ];
    //ក្នុង array មួយនេះខាងក្រៅជា index array មាន 4 ធាតុ ហើយខាងក្នុងធាតុនីមួយៗជា associative array មាន ៨ធាតុ

    //call array
    // echo $orders[1]["name"];
    echo "<table border='1'>";
    echo "<tr><td>N0</td><td>Name</td><td>Phone</td><td>Type</td><td>Size</td><td>QTY</td><td>Price</td><td>Tax</td><td>Payment</td></tr>";
    $i = 1;
    foreach($orders as $value){
        echo "<tr>";
        echo "<td>$i</td>";
        foreach($value as $key=>$data){
                echo "<td>$data</td>";
        }
        echo "<tr>";
        $i++;
    }
    echo "</table>";
    ?>