<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>會員註冊</title>
</head>

<body>
<?php
    include "./header.php";
    ?>
    <div class="row mt-3">
        <div class="col-md-4 mx-auto my-5 p-5 border shadow-sm">
        <h4 class='text-center'>會員註冊</h4>
            <form action="../api/signup_user.php" method="post">
                <div class="mb-3">
                    <label for="account" class="form-label">帳號：</label>
                    <input type="account" class="form-control" id="account" placeholder="輸入信箱" name="account" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">密碼：</label>
                    <input type="password" class="form-control" id="password" placeholder="輸入密碼" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="chkpassword" class="form-label">再次確認密碼：</label>
                    <input type="password" class="form-control" id="chkpassword" placeholder="再次輸入密碼" name="chkpassword" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">暱稱：</label>
                    <input type="name" class="form-control" id="name" placeholder="輸入暱稱" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="sex" class="form-label">性別：</label>
                    </br>
                    <select class="form-select" id="sex" name="sex" required>
                        <option selected>選擇性別</option>
                        <option value=1>男</option>
                        <option value=0>女</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">生日：</label>
                    </br>
                    <input type="date" class="form-control" id="birthday" placeholder="2014-09-18" name="birthday" required>
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary">註冊</button>
                <button type="reset" class="btn btn-primary">重置</button>
                </div>
                <div class="mb-3">
                已有帳號 <a href = "index.php?do=login">請登入</a>
                </div>
            </form>
        </div>
    </div>


    <?php
    include "./footer.php";
    ?>
</body>

</html>