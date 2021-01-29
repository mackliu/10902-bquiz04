<?php include_once "../base.php";

$_POST['cart']=serialize($_SESSION['cart']);

$Ord->save($_POST);

unset($_SESSION['cart']);

?>

<script>
alert("訂購成功！\n感謝您的選購")
location.href="../index.php";

</script>