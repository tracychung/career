<?php
include_once "../db/base.php";

$sql="INSERT INTO `news`(`subject`,`content`) 
           VALUES('{$_POST['subject']}',
                  '{$_POST['content']}')";

$pdo->exec($sql);


header("location:../admin_center.php?do=news");