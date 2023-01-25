<div class="fs-3 fw-bold mt-5 text-center" style="padding-top:20px;color:rgb(80, 110, 170)">進行中的問卷調查</div>
<ul class="list-group col-md-10 m-auto">
    <li class="d-flex mt-3 text-center list-group-item list-group-item-info list-group-item-action">
        <div class="col-8">主題</div>
        <div class="col-2">參與數</div>
        <div class="col-2">操作</div>
    </li>

<?php 
    $surveys=all("survey_subject",['active'=>1]);
    foreach($surveys as $survey){
?>
    <li class="d-flex list-group-item list-group-item-light list-group-item-action">
        <div class="col-8 font-weight-bolder" style="font-size:1.25rem">
            <?=$survey['subject'];?>
        </div>
        <div class="col-2 text-center">
            <?=$survey['vote'];?>
        </div>
        <div class="col-2 text-center">
            <a href="index.php?do=survey_item&id=<?=$survey['id'];?>" class="btn btn-sm btn-success mx-1">投票</a>
            <a href="index.php?do=survey_result&id=<?=$survey['id'];?>" class="btn btn-sm btn-info mx-1">結果</a>
        </div>
    </li>
<?php 
    }

?>
</ul>