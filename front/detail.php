<?php
$g=$Goods->find($_GET['id']);

?>

<h2 class="ct"><?=$g['name'];?></h2>
<div class='pp' style="display:flex;padding:10px 0 10px 10px">
      <div style="width:40%;text-align:center">
        <a href="?do=detail&id=<?=$g['id'];?>"><img src='img/<?=$g['img'];?>' style='width:200px'></a>
    </div>
      <div style="width:60%;vertical-align:top">
          <div>分類:<?=$Type->find($g['big'])['name'];?>><?=$Type->find($g['mid'])['name'];?></div>
          <div>價錢:<?=$g['price'];?></div>
          <div>簡介:<?=nl2br($g['intro']);?></div>
          <div>庫存量:<?=$g['quota'];?></div>
      </div>
    </div>
<div class="tt ct">
    <form action="?" method="get">
    購買數量:<input type="number" name="qt" value="1">
    <input type="hidden" name="do" value="buycart">
    <input type="hidden" name="goods" value="<?=$g['id'];?>">
    <input type="submit" value="" style="background:url('icon/0402.jpg');width:60px;height:20px">
</form>

</div>