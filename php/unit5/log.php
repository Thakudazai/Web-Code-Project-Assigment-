<form action="" method="post">
    Username: <input type="text" name="user"> <br>
    Password: <input type="password" name="password"> <br>
    <input type="submit" value="Login">
</form>
<?php
if (isset($_POST["user"])) {
    $user = $_POST["user"];
    $pass = $_POST["password"];
    if ($user == "Tevy" && $pass == 123) {
        echo "Log success..";
        $log = $user . "Loged on " . date("Y-m-d H:i:s") . "<br>";
        $attack = fopen("log.txt", "a");
        fwrite($attack, $log);
        fclose($attack);
    } else {
        echo "Error login..";
    }
}
?>