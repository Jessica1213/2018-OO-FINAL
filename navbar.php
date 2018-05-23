<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/index.php">
                運算思維與程式設計
            </a>
        </div>

        <?php
        if(BLL\UserBLL::isLogIn()) {
            $bll=new BLL\UserBLL();
            ?>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout.php">登出</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/personalinfo.php">Hi! <?=$bll->getUsername(SessionManager::get('UID')) ?></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/main.php">首頁</a></li>
                </ul>
                <?php
                    if(basename($_SERVER['PHP_SELF'])!="main.php") {
                        ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:history.go(-1)">回上一頁</a></li>
                    </ul>
                <?php } ?>

            </div>
            <?php
        }
        ?>
    </div>
</nav>