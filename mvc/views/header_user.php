<nav class="navbar navbar-expand-md sticky-top">
    <div class="container p-0">
        <a class="navbar-branch" href="#">
            <img src="public/img/logoPtit.jpg" height="50">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./Home">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Post">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Vaccination">Tiêm Chủng</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Hỗ trợ</a>
                </li> -->
            </ul>
            <ul class="nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        echo "Xin chào: " . $_SESSION["user_name"];

                        ?>
                    </a>
                    <div class="dropdown-menu bg-nav" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-dark" href="./Account">Thông tin tài khoản</a>
                        <a class="dropdown-item" href="./Vaccination/infoInjection">Tra cứu tiêm chủng</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./Login/logout">Đăng xuất</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>