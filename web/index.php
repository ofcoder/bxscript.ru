<?php
if ( ! session_id() ) @ session_start();
if (isset($_SESSION["user_name"])) {	
	echo '<p>Приветствую, Вас: ' . $_SESSION["user_name"] . '</p>';
	echo '<p><a href="./exit.php">Выйти >></a></p>';
} else {
	include_once('./form.php');
}
//echo 'I\'m alive!';