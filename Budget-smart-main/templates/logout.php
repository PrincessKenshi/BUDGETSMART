<?php
require '../init.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: ../index.php");
?>
