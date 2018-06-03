<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="index.php">
                拼命買
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php
                if(!BLL\UserBLL::isLogIn()) { ?>
                    <!-- 如果未登入-->
                    <li><a href="login.php">登入會員</a></li>
                    <li><a href="register.php">註冊會員</a></li>

                <?php }
                else {
                    $bll=new BLL\UserBLL(); ?>
                    <!-- 登入後-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            <?=$bll->getUsername(SessionManager::get('UID'))?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <!-- 如果是買家-->
                                <a href="Introduce.php">
                                    使用者
                                </a>
                                <a >	<!--<a href="{{ url('orderlist') }}" >-->
                                    購物車
                                </a>

                                <a href="logout.php">
                                    登出
                                </a>

                            </li>
                        </ul>
                    </li>
                <?php } ?>


            </ul>
        </div>
    </div>
</nav>