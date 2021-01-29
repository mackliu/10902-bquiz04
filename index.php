<?php include_once "base.php";

//遇到header重覆發送時,把導頁判斷移到index.php的最前面
if(isset($_GET['do']) && $_GET['do']=='buycart'){

    if(isset($_GET['goods'])){
        $_SESSION['cart'][$_GET['goods']]=$_GET['qt'];
    }
    
    if(empty($_SESSION['mem'])){
        to("../index.php?do=login");
        exit();
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/js.js"></script>
<script src="./js/jquery-3.4.1.min.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="index.php">
            	<img src="./icon/0416.jpg">
            </a>
            <div style="padding:10px;">
                <a href="index.php">回首頁</a> |
                <a href="index.php?do=news">最新消息</a> |
                <a href="index.php?do=look">購物流程</a> |
                <a href="index.php?do=buycart">購物車</a> |
                <?php if(empty($_SESSION['mem'])){ ?>
                    <a href="index.php?do=login">會員登入</a> |
                <?php
                }else{
                ?>
                <a href="javascript:lof('api/logout.php?do=mem')">登出</a> |
                <?php
                }?>
                
                <?php if(empty($_SESSION['admin'])){?>
                    <a href="index.php?do=admin">管理登入</a>
                <?php }else{ ?>

                    <a href="backend.php">返回管理</a>
                <?php } ?>
                
           </div>
           <marquee>年終特賣會開跑了&nbsp;&nbsp;&nbsp;情人節特惠活動</marquee>
        </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
                    <!--選單-->
                <a href='?'>全部商品(<?=$Goods->count();?>)</a>
            <?php
                $bigs=$Type->all(['parent'=>0]);
                foreach($bigs as $big){
            ?>
                <div class='ww'><a  href='?big=<?=$big['id'];?>'><?=$big['name'];?>(<?=$Goods->count(['big'=>$big['id']]);?>)</a>
            <?php

                    $mids=$Type->all(['parent'=>$big['id']]);
                    if(count($mids)>0){
                    echo "<div class='s'>";
                        foreach($mids as $mid){
                        ?>
                            <a  href='?big=<?=$big['id'];?>&mid=<?=$mid['id'];?>'><?=$mid['name'];?>(<?=$Goods->count(['mid'=>$mid['id']]);?>)</a>
                        <?php
                        }
                    echo "</div>";
                    }

                    echo "</div>";
                }


            ?>


        	</div>
            <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                	00005                </div>
            </span>
                    </div>
        <div id="right">
        <?php
                $do=$_GET['do']??'main';
                $file="front/".$do.".php";
                if(file_exists($file)){
                    include $file; 
                }else{
                    echo "檔案不存在";
                }



        ?>
        	        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
        <?=$Bottom->find(1)['bottom'];?>        </div>
    </div>

</body></html>