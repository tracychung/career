<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>最新消息</title>
    <style>
        .box{
            height: 30px;
        }
        .container {
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="box">

    </div>
    <div class="container mt-5">
        <p class="fs-3 fw-bold text-center" style="color:rgb(80, 110, 170)">
            最新消息
        </p>
        <div>
            <ul class="list-group">
                <li class='list-group-item list-group-item-action d-flex text-center bg-info text-white'>
                    <div class='col-md-10'>標題</div>
                    <div class='col-md-2'>人氣</div>
                </li>
                <?php

                // $all_news="SELECT * FROM `news`  ORDER by `top` desc,`readed` desc ";
                // $rows=$pdo->query($all_news)->fetchAll(); 

                $rows = all('news', " ORDER by `top` desc,`readed` desc");

                //$hot=$pdo->query("SELECT `id` FROM `news` ORDER BY `readed` desc")->fetchColumn();
                $hot = q("SELECT `id` FROM `news` ORDER BY `readed` desc")[0][0];
                foreach ($rows as $row) {
                    echo "<li class='list-group-item list-group-item-action d-flex'>";
                    echo "<div class='col-md-10'>";
                    echo ($row['top'] == 1) ? "top" : '';
                    echo ($row['id'] == $hot) ? "hot" : '';
                    echo "<a href='index.php?do=news_detail&id={$row['id']}'>";
                    echo $row['subject'];
                    echo "</a>";
                    echo "</div>";
                    echo "<div class='col-md-2 text-center'>";
                    echo $row['readed'];
                    echo "</div>";
                    echo "</li>";
                }

                ?>

            </ul>
        </div>
    </div>

</body>

</html>