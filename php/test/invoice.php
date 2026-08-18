<?php
// Retrieve values sent from index.php form via POST
$customerName = isset($_POST['customer_name']) ? $_POST['customer_name'] : 'Customer';
$itemName     = isset($_POST['item_name']) ? $_POST['item_name'] : 'Coffee';
$cups         = isset($_POST['cups']) ? (int)$_POST['cups'] : 1;
$cashPaid     = isset($_POST['cash_paid']) ? (float)$_POST['cash_paid'] : 0.00;

// Set pricing logic
$pricePerCup = 4.50;
$subtotal    = $cups * $pricePerCup;
$taxRate     = 0.08; // 8% tax
$tax         = $subtotal * $taxRate;
$total       = $subtotal + $tax;
$change      = $cashPaid - $total;

$orderNumber = "#" . rand(1000, 9999);
$orderDate   = date("M d, Y h:i A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SbovCoffee Invoice</title>
    <style>
        :root {
            --sb-green: #006241;
            --sb-darkGreen: #1e3932;
            --sb-bg: #f2f0eb;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: var(--sb-bg);
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
            color: var(--sb-green);
            text-transform: uppercase;
        }
        .meta-info {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #555;
            margin-bottom: 16px;
        }
        .item-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 16px;
        }
        .item-table th {
            text-align: left;
            font-size: 11px;
            color: #888;
            border-bottom: 1px solid #eee;
            padding-bottom: 6px;
        }
        .item-table td {
            padding: 8px 0;
            font-size: 13px;
        }
        .text-right { text-align: right; }
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
        .payment-info {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 6px;
            margin-top: 12px;
            font-size: 13px;
        }
        .warning {
            color: #d9534f;
            font-weight: bold;
        }
        .btn-back {
            display: block;
            text-align: center;
            margin-top: 18px;
            text-decoration: none;
            color: var(--sb-green);
            font-size: 13px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="receipt-card">
    <div class="header">
        <div class="logo">Starbucks</div>
        <small>Store #10402 - Siem Reap</small>
    </div>

    <div class="meta-info">
        <div>
            <strong>Order:</strong> <?php echo $orderNumber; ?><br>
            <strong>Customer:</strong> <?php echo htmlspecialchars($customerName); ?>
        </div>
        <div class="text-right">
            <strong>Date:</strong><br><?php echo $orderDate; ?>
        </div>
    </div>

    <table class="item-table">
        <thead>
            <tr>
                <th>Qty</th>
                <th>Item</th>
                <th class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $cups; ?>x</td>
                <td><?php echo htmlspecialchars($itemName); ?> ($<?php echo number_format($pricePerCup, 2); ?>)</td>
                <td class="text-right">$<?php echo number_format($subtotal, 2); ?></td>
            </tr>
        </tbody>
    </table>

    <div class="totals">
        <div class="totals-row">
            <span>Subtotal</span>
            <span>$<?php echo number_format($subtotal, 2); ?></span>
        </div>
        <div class="totals-row">
            <span>Tax (8%)</span>
            <span>$<?php echo number_format($tax, 2); ?></span>
        </div>
        <div class="totals-row grand-total">
            <span>Total Amount</span>
            <span>$<?php echo number_format($total, 2); ?></span>
        </div>
    </div>

    <!-- Cash Payment & Change Calculation -->
    <div class="payment-info">
        <div class="totals-row">
            <span>Cash Paid:</span>
            <span>$<?php echo number_format($cashPaid, 2); ?></span>
        </div>
        <div class="totals-row">
            <span>Change Due:</span>
            <?php if ($change < 0): ?>
                <span class="warning">-$<?php echo number_format(abs($change), 2); ?> (Insufficient Cash)</span>
            <?php else: ?>
                <strong>$<?php echo number_format($change, 2); ?></strong>
            <?php endif; ?>
        </div>
    </div>

    <a href="index.php" class="btn-back">← Create New Order</a>
</div>

</body>
</html>