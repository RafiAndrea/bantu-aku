<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location : http://localhost/coba2/views/user/login/");
}
session_destroy();
$_SESSION = [];
session_unset();
header("Location : http://localhost/coba2/")
?>