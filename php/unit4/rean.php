<?php
    //create associative array automatic
    $order = [
        "name"=>"Thy Shuch",
        "phopne"=>"096 123 4567",
        "type"=>"Ice Latte",
        "size"=>"Medium",
        "qty"=> 3,
        "price"=>3.5
    ];
    //create associative array manual
    $order["tax"] = 0.1; //tax VAT 10%
    $order["payment"] = 50;
?>
Customer: Thy Shuch <br>
Phone: 096 123 4567
<table border="1">
    <tr>
        <td>ITEM</td>
        <td>NAME</td>
        <td>QTY</td>
        <td>AMOUNT</td>
    </tr>
    <tr>
        <td></td>
        <td>Ice Latte M</td>
        <td>Hot Latte</td>
        <td>Americano</td>
    </tr>
    <tr>
        <td>Subtotal</td>
        <td>4.5$</td>
        <td>4.5$</td>
        <td>5.00$</td>
    </tr>
    <tr>
        <td>Total Tax</td>
        <td>0.50$</td>
        <td>0.50$</td>
        <td>0.50$</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>5.00$</td>
        <td>5.00$</td>
        <td>5.50$</td>
    </tr>
    <tr>
        <td>Cash</td>
        <td>5.00$</td>
        <td>5.00$</td>
        <td>5.50$</td>
    </tr>
    <tr>
        <td>Change back (Cash)</td>
        <td>0.00$</td>
        <td>0.00$</td>
        <td>0.00$</td>
    </tr>
</table>