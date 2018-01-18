<?php
session_name ($_SESSION['sessionId']);
session_start();

unset ($_SESSION['loggedIn']);
unset ($_SESSION['username']);
unset ($_SESSION['password']);
unset($_SESSION['sessionId']);
session_unset();
session_destroy();
//echo("Sign out successsful.");
header("location:main.php");
exit();
?>