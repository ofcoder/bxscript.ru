<?php
error_reporting(E_ALL);
if (isset($_POST['user_name'])) {
    $userName = htmlspecialchars($_POST['user_name']);
    session_start();
    $_SESSION["user_name"]=$userName;	
}
exit(header("Refresh: 1; url=" . $_SERVER["HTTP_REFERER"], false));

//echo $_SESSION["user_name"];
//unset($_SESSION["user_name"]);
//setcookie("MyCookie[foo]", 'Testing 1', time()+3600);
//if (isset($_COOKIE['count'])) {}