<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks Order Form</title>
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
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-card {
            background: #ffffff;
            width: 100%;
            max-width: 360px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-top: 6px solid var(--sb-green);
        }
        h2 {
            color: var(--sb-darkGreen);
            margin-top: 0;
            text-align: center;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            background-color: var(--sb-green);
            color: white;
            border: none;
            padding: 12px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background-color: var(--sb-darkGreen);
        }
    </style>
</head>
<body>

<div class="form-card">
    <h2>☕ Shuch Coffee</h2>
    
    <!-- Sends user inputs to invoice.php using POST -->
    <form action="invoice.php" method="POST">
        <div class="form-group">
            <label for="customer">Customer Name:</label>
            <input type="text" id="customer" name="customer_name" value="Alex" required>
        </div>

        <div class="form-group">
            <label for="item">Select Coffee ($4.50 / cup):</label>
            <select id="item" name="item_name">
                <option value="Iced Caffe Latte">Iced Caffe Latte</option>
                <option value="Caramel Frappuccino">Caramel Frappuccino</option>
                <option value="Americano">Americano</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cups">How many cups?:</label>
            <input type="number" id="cups" name="cups" min="1" value="1" required>
        </div>

        <div class="form-group">
            <label for="cash">Cash Paid ($):</label>
            <input type="number" id="cash" name="cash_paid" step="0.01" min="0" placeholder="e.g. 20.00" required>
        </div>

        <button type="submit">Generate Invoice</button>
    </form>
</div>

</body>
</html>