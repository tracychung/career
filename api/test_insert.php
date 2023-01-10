<?php
include "../db/base.php";

$q1=($_POST['q1']);
$q2=($_POST['q2']);
$q3=($_POST['q3']);
$q4=($_POST['q4']);
$q5=($_POST['q5']);
$q6=($_POST['q6']);
$q7=($_POST['q7']);
$q8=($_POST['q8']);
$q9=($_POST['q9']);
$q10=($_POST['q10']);
$total=array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10);
$total=array_sum($total);



$sql="insert into `test` (`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`,`q10`,`total`) values('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$total')";

$pdo->exec($sql);

header("location:../front/test_result.php");