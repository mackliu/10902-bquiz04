<?php

if(isset($_GET['big']) && isset($_GET['mid'])){

    $nav=$Type->find($_GET['big'])['name'] . " > " . $Type->find($_GET['mid'])['name'];
    $goods=$Goods->all(['mid'=>$_GET['mid'],'sh'=>1]);

}elseif(isset($_GET['big'])){

    $nav=$Type->find($_GET['big'])['name'];
    $goods=$Goods->all(['big'=>$_GET['big'],'sh'=>1]);

}else{

    $nav="全部商品";
    $goods=$Goods->all(['sh'=>1]);

}

?>
<h2><?=$nav;?></h2>

<?php
foreach($goods as $g){
?>
    <div class='pp' style="display:flex;padding:10px 0 10px 10px">
      <div style="width:40%;text-align:center">
        <a href="?do=detail&id=<?=$g['id'];?>"><img src='img/<?=$g['img'];?>' style='width:200px'></a>
    </div>
      <div style="width:60%;vertical-align:top">
          <div class='tt ct'><?=$g['name'];?></div>
          <div>價錢:<?=$g['price'];?>
            <a style="float:right" href="?do=buycart&goods=<?=$g['id'];?>&qt=1"><img src="icon/0402.jpg" ></a>
        </div>
          <div>規格:<?=$g['spec'];?></div>
          <div>簡介:<?=mb_substr($g['intro'],0,25,'utf8');?></div>
      </div>
    </div>
    <hr>
<?php
}



?>