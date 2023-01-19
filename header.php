<header>
    <div class="row">
        <nav class="fixed-top navbar navbar-expand-sm bg-white navbar-white text-dark">
            <div class="container-fluid">
                <div class="col-9 col-sm-3 col-md-2 text-center">
                    <a class="navbar-brand" href="index.php">
                        <i class="fa-regular fa-compass"></i>&nbspCAREER
                    </a>
                </div>
                <div class="col-3 col-sm-9 col-md-10 text-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="row">
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <div class="col-sm-12 col-md-12">
                                <?php
                                $file_str = explode("/", $_SERVER['PHP_SELF']);
                                $local = str_replace('.php', '', array_pop($file_str));
                                switch ($local) {
                                    case "index":
                                        echo "<div class='row'>";
                                        echo "<div class='col-sm-8 col-md-8 d-flex align-items-center'>";
                                        echo "<ul class='navbar-nav'>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='index.php?do=news'>最新消息</a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='index.php?do=test'>適性測驗</a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='index.php?do=survey'>問卷調查</a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='index.php?do=message'>職訓分享</a>";
                                        echo "</li>";
                                        echo "</ul>";
                                        echo "</div>";
                                        if (isset($_SESSION['login'])) {
                                            if ($_SESSION['login']['id'] == 1) {
                                                echo "<div class='col-sm-4 col-md-4 text-center'>";
                                                echo "<ul class='navbar-nav'>";
                                                echo "<li class='nav-item'>";
                                                echo "<a class='nav-link' href='admin_center.php'><button class='btn btn-primary' type='button'>回管理首頁</button></a>";
                                                echo "</li>";
                                                echo "<li class='nav-item'>";
                                                echo "<a class='nav-link' href='logout.php'><button class='btn btn-primary' type='button'>登出</button></a>";
                                                echo "</li>";
                                                echo "</ul>";
                                                echo "</div>";
                                            } else {
                                                echo "<div class='col-sm-4 col-md-4 text-center'>";
                                                echo "<a class='nav-link' href='logout.php'><button class='btn btn-primary' type='button'>登出</button></a>";
                                                echo "</div>";
                                            }
                                        } else {
                                            echo "<div class='col-sm-4 col-md-4 text-center'>";
                                            echo "<a class='nav-link' href='index.php?do=signup'><button class='btn btn-primary' type='button'>註冊/登入</button></a>";
                                            echo "</div>";
                                        }
                                        echo "</div>";
                                        break;
                                    case "admin_center":
                                        echo "<div class='row'>";
                                        echo "<div class='col-sm-8 col-md-8 d-flex align-items-center'>";
                                        echo "<ul class='navbar-nav'>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='admin_center.php?do=news'>新聞管理</a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='admin_center.php?do=test'>測驗管理</a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='admin_center.php?do=survey'>問卷管理</a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='admin_center.php?do=message'>分享管理</a>";
                                        echo "</li>";
                                        echo "</ul>";
                                        echo "</div>";
                                        echo "<div class='col-sm-4 col-md-4 text-center'>";
                                        echo "<ul class='navbar-nav'>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='admin_center.php'><button class='btn btn-primary' type='button'>回管理首頁</button></a>";
                                        echo "</li>";
                                        echo "<li class='nav-item'>";
                                        echo "<a class='nav-link' href='logout.php'><button class='btn btn-primary' type='button'>登出</button></a>";
                                        echo "</li>";
                                        echo "</ul>";
                                        echo "</div>";
                                        break;
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>