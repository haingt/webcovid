<!DOCTYPE html>
<html lang="en">

<head>
<base href= "<?php echo SITEURL?> ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/style_admin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" crossorigin="anonymous" />

    <style>
  
    </style>
</head>

<body class="bgx">
    <div class="row ">
        <div class="col-2">
            <div class="wrapper d-flex">
                <div class="sidebar">
                    <ul>
                        <li><a href="./Home"><span class="text-menu" style="font-size: 24px;">
                            PTIT COVID
                        </span></a></li>
                        <li><a href="./Admin/index"><i class="fas fa-home"></i><span class="text-menu">
                            Home
                        </span></a></li>
                        <li><a href="./Admin/listAcc"><i class="fa fa-users" aria-hidden="true"></i><span class="text-menu">
                            Quản lý người dùng
                        </span> </a></li>
                        <li><a href="./Admin/createAcc"><i class="fa fa-plus" aria-hidden="true"></i><span class="text-menu">
                            Thêm tài khoản
                        </span>  </a></li>
                    </ul> <small class="text-muted px-3"><span class="text-menu">
                       Quản lý bài viết
                    </span></small>
                    <ul>
                        <li><a href="./Admin/listPost"><i class="fa fa-list-alt" aria-hidden="true"></i><span class="text-menu">
                            Danh sách bài viết
                        </span></a></li>
                        <li><a href="./Admin/createPost"><i class="fa fa-plus" aria-hidden="true"></i><span class="text-menu">
                            Thêm bài viết
                        </span></a></li>

                    </ul> <small class="text-muted px-3"><span class="text-menu">
                        Quản lý tiêm vacxin
                    </span></small>
                    <ul>
                        <li><a href="./Admin/ListM1"><i class="fas fa-external-link-alt"></i><span class="text-menu">
                            Phiếu đăng ký tiêm mũi 1
                        </span></a></li>
                        <li><a href="./Admin/ListM2"><i class="fas fa-external-link-alt"></i><span class="text-menu">
                            Phiếu đăng ký tiêm mũi 2
                        </span></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>

<?php require_once "./mvc/views/page/".$data["page"].".php"?>