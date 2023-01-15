<?php
include "../db/base.php";

session_start();

$account=$_POST['account'];
$password=$_POST['password'];

$sql="select `id` from `user` where `account`='$account' && `password`='$password' ";
$chk=$pdo->query($sql)->fetchColumn();

if($chk==1){
    $sql="select `id`,`account`,`name`,`last_login` from `user` where `account`='$account' && `password`='$password' ";
    $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    $_SESSION['login']=$user;
    header("location:../admin_center.php");

}else if($chk>1){
        $sql="select `id`,`account`,`name`,`last_login` from `user` where `account`='$account' && `password`='$password' ";
        $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    
        $_SESSION['login']=$user;
        header("location:../index.php");

}else{
    if(isset($_SESSION['login_try'])){
        $_SESSION['login_try']++;
    }else{
        $_SESSION['login_try']=1;
    }

    //如果帳號或密碼有錯，則將使用者導向登入頁，並帶上錯誤值
    header("location:../index.php?do=login&error=login");
}
