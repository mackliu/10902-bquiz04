<?php
session_start();
$_SESSION['cart'][$_POST['id']]=$_POST['qt'];

?>