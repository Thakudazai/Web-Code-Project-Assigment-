<?php
    $message = ""; // Initialize to avoid undefined variable notice

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"] ?? "";
        if (empty(trim($user))) {
            $message = "⚠️ប្រអប់នេះត្រូវតែបញ្ចូលទិន្នន័យ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .require {
            color: red;
        }
    </style>
</head>
<body>
    <h1>SYSTEM.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officiis, necessitatibus dolores doloribus minima a quo asperiores fugiat vitae sunt, iste corporis at modi rem quidem! Fuga vitae sequi illo?</p>
    
    <form action="" method="post">
        Username: <input type="text" name="user">
        <span class="require"><?php echo $message; ?></span><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>