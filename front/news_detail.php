
<?php
$sql="SELECT * FROM `news` WHERE `id`='{$_GET['id']}'";
$news=$pdo->query($sql)->fetch();

?>
<div style="width:100%;height:30px">

</div>
<h3 class="mt-5 text-left font-weight-bolder"><?=$news['subject'];?></h3>
<div class="mt-3 text-secondary">
    發佈時間：<?=$news['created_at'];?>
</div>
<div class="mt-3">
    <img src="../img/news_01.jpg" alt="">
</div>
<div class="mt-3" style='font-size:1.2rem'><?=nl2br($news['content']);?>
</div>