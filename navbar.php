<nav class="navbar navbar-default navbar-static-top">
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
            <a class="navbar-brand" href="main.php">
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
                <!-- 如果未登入-->
                <li><a href="/login.php">Login</a></li>
                <li><a href="/register.php">Register</a></li>
                <!-- 登入後-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        使用者(連資料庫) <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <!-- 如果是買家-->
                            <a ><!--  href="{{ url('user') }}" > -->
                                使用者
                            </a>
                            <a >	<!--<a href="{{ url('orderlist') }}" >-->
                                購物車
                            </a>
                            <!-- 如果是賣家-->

                            <a href="/login.php">
                                Logout
                            </a>

                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>


