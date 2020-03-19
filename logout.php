<?php
session_start();
session_destroy();

header('location:yourLogin.php');

?>