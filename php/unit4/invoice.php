<?php
// 1. PHP LOGIC & ORDER DATA
$storeName = "Starbucks Coffee #10402";
$storeAddress = "123 Main Street, Suite 100";
$orderNumber = "#" . rand(1000, 9999);
$orderDate = date("M d, Y h:i A");
$customerName = "Alex Rivera";

// Items array (Name, Size, Quantity, Price)
$items = [
    ["name" => "Iced Caramel Macchiato", "size" => "Grande", "qty" => 2, "price" => 5.45],
    ["name" => "Pike Place Roast", "size" => "Venti", "qty" => 1, "price" => 3.25],
    ["name" => "Butter Croissant", "size" => "Warm", "qty" => 1, "price" => 3.95]
];

// Calculate Math using PHP
$subtotal = 0;
foreach ($items as $item) {
    $subtotal += $item["qty"] * $item["price"];
}

$taxRate = 0.0825; // 8.25%
$tax = $subtotal * $taxRate;
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks Order Receipt</title>
    <style>
        /* CSS STYLING */
        :root {
            --sb-green: #006241;
            --sb-darkGreen: #1e3932;
            --sb-bg: #f2f0eb;
            --text-color: #212121;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: var(--sb-bg);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            padding: 40px 20px;
            margin: 0;
        }

        .receipt-card {
            background: #ffffff;
            width: 100%;
            max-width: 380px;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border-top: 6px solid var(--sb-green);
        }

        .header {
            text-align: center;
            border-bottom: 2px dashed #e0e0e0;
            padding-bottom: 16px;
            margin-bottom: 16px;
        }

        .logo {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 1.5px;
            color: var(--sb-green);
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .store-info {
            font-size: 12px;
            color: #666;
            line-height: 1.4;
        }

        .meta-info {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #555;
            margin-bottom: 16px;
        }

        .item-list {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
        }

        .item-list th {
            text-align: left;
            font-size: 11px;
            text-transform: uppercase;
            color: #888;
            border-bottom: 1px solid #eee;
            padding-bottom: 6px;
        }

        .item-list td {
            padding: 8px 0;
            font-size: 13px;
            vertical-align: top;
        }

        .item-name {
            font-weight: 600;
        }

        .item-size {
            font-size: 11px;
            color: #777;
        }

        .text-right {
            text-align: right;
        }

        .totals {
            border-top: 1px solid #eee;
            padding-top: 12px;
            font-size: 13px;
        }

        .totals-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .grand-total {
            font-size: 16px;
            font-weight: 700;
            color: var(--sb-darkGreen);
            border-top: 2px solid var(--sb-darkGreen);
            padding-top: 8px;
            margin-top: 8px;
        }

        .footer {
            text-align: center;
            margin-top: 24px;
            font-size: 11px;
            color: #777;
        }

        .star-rewards {
            background-color: #f1f8f5;
            border: 1px dashed var(--sb-green);
            color: var(--sb-green);
            padding: 10px;
            border-radius: 6px;
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            margin-top: 16px;
        }
    </style>
</head>
<body>

<div class="receipt-card">
    <!-- Header Section -->
    <div class="header">
        <div class="logo">Starbucks</div>
        <div class="store-info">
            <?php echo $storeName; ?><br>
            <?php echo $storeAddress; ?>
        </div>
    </div>

    <!-- Order Metadata -->
    <div class="meta-info">
        <div>
            <strong>Order:</strong> <?php echo $orderNumber; ?><br>
            <strong>Customer:</strong> <?php echo $customerName; ?>
        </div>
        <div class="text-right">
            <strong>Date:</strong><br><?php echo $orderDate; ?>
        </div>
    </div>

    <!-- Items Table -->
    <table class="item-list">
        <thead>
            <tr>
                <th>Qty</th>
                <th>Item</th>
                <th class="text-right">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <?php $itemTotal = $item['qty'] * $item['price']; ?>
                <tr>
                    <td style="width: 30px;"><?php echo $item['qty']; ?>x</td>
                    <td>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                        <div class="item-size"><?php echo $item['size']; ?></div>
                    </td>
                    <td class="text-right">$<?php echo number_format($itemTotal, 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Totals Calculation -->
    <div class="totals">
        <div class="totals-row">
            <span>Subtotal</span>
            <span>$<?php echo number_format($subtotal, 2); ?></span>
        </div>
        <div class="totals-row">
            <span>Tax (8.25%)</span>
            <span>$<?php echo number_format($tax, 2); ?></span>
        </div>
        <div class="totals-row grand-total">
            <span>Total</span>
            <span>$<?php echo number_format($total, 2); ?></span>
        </div>
    </div>

    <!-- Loyalty Note -->
    <div class="star-rewards">
        ★ You earned 15 Stars with this purchase!
    </div>

    <!-- Footer -->
    <div class="footer">
        Thank you for visiting Starbucks!<br>
        Have a great day.
    </div>
</div>

</body>
</html>