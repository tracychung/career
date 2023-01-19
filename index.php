<?php
include "./db/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>career</title>
</head>

<body style="background-color: white;">
    <?php
    include "./header.php";
    ?>
    <main class='container'>
        <?php

        $do = $_GET['do'] ?? 'main';

        /* if(isset($_GET['do'])){
    $do=$_GET['do'];
}else{
    $do='main';
} */

        $file = "./front/" . $do . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./front/main.php";
        }
        ?>
    </main>
    
</body>
<?php
    include "./footer.php";
    ?>

</html>