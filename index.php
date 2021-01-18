<?php include_once "base.php";?>
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
                <a href="index.php?do=login">會員登入</a> |
                <a href="index.php?do=admin">管理登入</a>
           </div>
           <marquee>年終特賣會開跑了&nbsp;&nbsp;&nbsp;情人節特惠活動</marquee>
        </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
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