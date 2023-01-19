<?php
$subject=find("survey_subject",$_GET['id']);
$options=all("survey_options",['subject_id'=>$_GET['id']]);
/* dd($subject);
dd($options); */
?>
<div class="fs-3 fw-bold mt-5 text-center" style="padding-top:20px;color:rgb(80, 110, 170)">問卷結果</div>

<div class="fs-4 fw-bold mt-3 text-primary text-center"><?=$subject['subject'];?></div>
<ul class="list-group col-10 mx-auto">
    <?php
    foreach($options as $option){
        $division=($subject['vote']==0)?1:$subject['vote'];
        $width=round(($option['vote']/$division)*100,2);
    ?>
    <li class="d-flex list-group-item list-group-item-light list-group-item-action">
        <div class="col-6"><?=$option['opt'];?></div>
        <div class="col-6 d-flex align-items-center">
            <div class="bg-primary rounded" style="width:<?=$width;?>%">&nbsp;</div>
            <div><?=$width;?>%</div>
        </div>
    </li>
    <?php
    }
    ?>
</ul>
<div class="text-center mt-4">

    <a href="index.php?do=survey" class="btn btn-warning mx-1">返回</a>
</div>
