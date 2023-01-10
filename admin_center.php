<?php

include "./db/base.php";

if(!isset($_SESSION['login'])){
    header("location:index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="./font.css">
    <title>後台管理中心</title>

</head>
<body>
</head>
<body>
<?php
  include "./header.php";
?>
<main class="container">
<?php
$do=$_GET['do']??'main';
$file='./back/'.$do.".php";
//echo $file;
if(file_exists($file)){
    include $file;
}else{
    include "./back/main.php";
}
?>
</main>
<?php include "./footer.php";?>
</body>
</html>
  
</body>
</html>