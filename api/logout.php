<?php

include_once "../base.php";

unset($_SESSION[$_GET['do']]);

//$do=$_GET['do'];
//unset($_SESSION[$do]);

//switch($_GET['do']){
//    case "admin":
//        unset($_SESSION['admin']);
//
//    break;
//    case "mem":
//        unset($_SESSION['mem']);
//    break;
//}

to("../index.php");

?>