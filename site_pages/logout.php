<?php
session_start();
session_unset();
session_destroy();
//echo("Sign out successsful.");
header("location:main.php");
exit();
?>