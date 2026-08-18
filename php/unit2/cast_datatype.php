<?php
if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $password = $_POST['pass'];

    // var_dump($password);
    $password = (int)$password;

    if ($user === "Admin" && $password === 123) {
        echo "Login success.";
    } else {
        echo "Incorrect username or password";
    }
}

?>
<form action="" method="post">
    Username: <input type="text" name="user"> <br>
    Password: <input type="password" name="pass"> <br>
    <input type="submit" value="បញ្ជូន">
</form>