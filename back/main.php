<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理中心</title>
</head>
<body>
<?php
  include "./header.php";
?>
    <h1 class="text-center" style="padding-top:70px;">後台管理中心</h1>
    <form action="./api/upload.php" method='post' enctype="multipart/form-data">
        <label for="">檔名<input type="text" name="name" ></label>
        <input type="file" name="img">
        <input type="submit" value="上傳">
    </form>

</body>
</html>

