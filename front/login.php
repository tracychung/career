<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>會員登入</title>
</head>

<body>
    <?php
    include "./header.php";
    ?>

    <?php
    if (isset($_GET['error'])) {
        echo "<div class='text-danger text-center'>";
        echo "帳號或密碼錯誤，";
        echo "登入嘗試" . $_SESSION['login_try'] . "次";
        echo "</div>";
    }
    ?>
    <div class="row mt-5" style="--bs-gutter-x: 0">
        <div class="col-md-4 mx-auto my-5 p-5 border shadow-sm">
            <form action="../api/chk_user.php" method="post">
                <div class="mb-3">
                    <label for="account" class="form-label">帳號：</label>
                    <input type="account" class="form-control" id="account" placeholder="輸入信箱" name="account" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">密碼：</label>
                    <input type="password" class="form-control" id="password" placeholder="輸入密碼" name="password" required>
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary">登入</button>
                </div>
                <div class="mb-3">
                還沒註冊嗎? <a href="index.php?do=signup">立即註冊</a>
                </div>
            </form>
        </div>
    </div>
   
    <div style="height:210px">
    </div>

    <?php
    include "./footer.php";
    ?>
</body>

</html>