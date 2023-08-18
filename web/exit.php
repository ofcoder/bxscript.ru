<?php
if ( ! session_id() ) @ session_start();
unset($_SESSION["user_name"]);
exit(header("Refresh: 1; url=" . $_SERVER["HTTP_REFERER"], false));