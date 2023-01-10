<?php
include "../db/base.php";

$account=trim(strip_tags($_POST['account']));
$password=trim($_POST['password']);
$name=trim($_POST['name']);
$sex=trim($_POST['sex']);
$birthday=trim($_POST['birthday']);
$age = "SELECT datediff(CURRENT_DATE, `birthday`)/365 FROM `user`;";
$last_login="0000-00-00 00:00:00";  //移除,讓資料庫自動填入時間

//$sql="insert into `users` (`acc`,`pw`,`name`,`email`,`last_login`) values('$acc','$pw','$name','$email','$last_login')";
$sql="insert into `user` (`account`,`password`,`name`,`sex`,`birthday`) values('$account','$password','$name','$sex','$birthday')";
// echo "acc=>".$acc;
// echo "<br>";
// echo "pw=>".$pw;
// echo "<br>";
// echo "name=>".$name;
// echo "<br>";
// echo "email=>".$email;
// echo "<br>";
// echo $sql;
$pdo->exec($sql);

//註冊完成後，將使用者導向登入頁
header("location:../index.php");