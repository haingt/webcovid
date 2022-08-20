<?php 
   
    $list = json_decode($data["list"]);
    
    $i = $list[0];
   
?>
<main class=" container-fluid" style="background-color: #d3dbf3;">
        <div class="container p-0" style="background-color: #fff;">
            <div class="banner">
                <img src="public/img/banner.jpg" width="100%" alt="">
            </div>
            <!-- Tin tức -->
            <div class="content mt-5 mx-3">
                <h2 class=" ">Tin tức</h2>
                <hr>
                <div class="row m-0">
                   <?php 
                   foreach ($list as $item) {
                    echo ' <div class="col-lg-4  col-md-6 col-12 mb-3">
                    <div class="card">
                        <img src="./public/upload/'.$item->thumbnail.'" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title card-txt"><a href="./Post/detail/'.$item->id .'" class="text-dark">'
                            .$item->title.
                        '</a></h5>
                            <div class="card-txt mb-3">'
                            .$item->text_top . $item->text_bottom.
                            '</div>
                            <a href="./Post/detail/'.$item->id .'" class="btn btn-primary">xem thêm<i class="pl-2 fa fa-hand-o-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    </div>'
                    
                    ;
                    }
                        
                   ?>
                   
                   <!--  <div class="col-lg-4  col-md-6 col-12 mb-3">
                        <div class="card">
                            <img src="https://img.nhandan.com.vn/resize/600x-/Files/Images/2021/10/27/DIA-1635343772658.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ptit: Lấy mẫu xét nghiệm nhanh cho sinh viên đến từ vùng dịch</h5>
                                <div class="card-txt mb-3">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed explicabo laboriosam veniam, velit perspiciatis mollitia recusandae asperiores incidunt architecto laudantium placeat consectetur nostrum cupiditate ex
                                        aliquam, aspernatur amet maiores.</p>
                                </div>
                                <a href="./post.html" class="btn btn-primary">xem thêm>></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Thống kê covid -->
            <div class="content mt-5 mx-3">
                <h2 class="ml-auto mt-3">Thống kê Covid-19</h2>
                <hr>
                <div class="row m-0">
                    <div class="col-lg-4   col-12 mt-4">
                        <h4>Số liệu thống kê người mắc covid Việt Nam và thế giới</h4>
                    </div>
                    <div class="col-lg-8   col-12 ">
                        <h4 class="text-center">Việt Nam</h4>
                        <div class="row m-0">
                            <div class="col-md-4 text-center pt-3 bg-covid-red">
                                <p class="fz-20"><i class="fas fa-virus mr-2" style="color: red;"></i>Số người nhiễm </p>
                                <h4 class="text-danger" id="vn-red">12345</h4>
                            </div>
                            <div class="col-md-4 text-center pt-3 bg-covid-green" style=" background-color: rgba(47, 233, 47, 0.2); ">
                                <p class="fz-20"><i class="fas fa-smile mr-2" style="color: green;"></i>Khỏi bệnh</p>
                                <h4 class="text-success" id="vn-green">4321</h4>
                            </div>
                            <div class="col-md-4 text-center pt-3 bg-covid-gray" style=" background-color: rgba(47, 47, 47, 0.2);">
                                <p class=""><i class="fas fa-frown mr-2"></i>Tử vong</p>
                                <h4 id="vn-gray">1234</h4>
                            </div>
                        </div>

                        <h4 class="text-center mt-3">Thế giới</h4>
                        <div class="row m-0">
                            <div class="col-md-4 text-center pt-3 bg-covid-red">
                                <p class="fz-20"><i class="fas fa-virus mr-2" style="color: red;"></i>Số người nhiễm </p>
                                <h4 id="global-red" class="text-danger">123456789</h4>
                            </div>
                            <div class="col-md-4 text-center pt-3 bg-covid-green">
                                <p class="fz-20"><i class="fas fa-smile mr-2" style="color: green;"></i>Khỏi bệnh</p>
                                <h4 id="global-green" class="text-success">9654321</h4>
                            </div>
                            <div class="col-md-4 text-center pt-3 bg-covid-gray">
                                <p class="fz-20"><i class="fas fa-frown mr-2"></i>Tử vong</p>
                                <h4 id="global-gray" class="text-dark">1256789</h4>
                            </div>

                        </div>

                        <h6 class="text-center mt-3"><i id="day-updated">Dữ liệu được cập nhật ngày:</i></h6>
                    </div>
                </div>
            </div>
            <!-- Tiêm chủng -->
            <div class="content mt-5 mx-3 pb-5">
                <h2 class="ml-auto mt-3">Tiêm phòng Covid-19</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-6  col-md-6 col-12 mb-3">
                        <img class="img-fluid" src="public/img/tiemvaccine.jpg" alt="">
                    </div>
                    <div class="col-lg-6  col-md-6 col-12 mb-3">
                        <h3>Học viện công nghệ bưu chính viễn thông tổ chức tiêm Vacxin cho sinh viên </h3>

                        <a href="./Vaccination" class="btn btn-success">Đăng ký tiêm</a>
                        
                        <a href="./Vaccination/infoInjection" class="btn btn-outline-success">Tra cứu đăng ký tiêm</a> 
                        
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        var d = new Date;
        var apiCovid = 'https://api.covid19api.com/summary';
        fetch(apiCovid).then(function(reponse) {
            return reponse.json();
        }).then(function(data) {
            let Countries = data.Countries;
            let vietNam = Countries.find(obj => obj.CountryCode === 'VN');
            document.getElementById("vn-red").innerHTML = new Intl.NumberFormat('de-DE').format(vietNam.TotalConfirmed);
            document.getElementById("vn-green").innerHTML = "..."
            document.getElementById("vn-gray").innerHTML = new Intl.NumberFormat('de-DE').format(vietNam.TotalDeaths);
            document.getElementById("global-red").innerHTML = new Intl.NumberFormat('de-DE').format(data.Global.TotalConfirmed);
            document.getElementById("global-green").innerHTML = "..."
            document.getElementById("global-gray").innerHTML = new Intl.NumberFormat('de-DE').format(data.Global.TotalDeaths);
            document.getElementById("day-updated").innerHTML = "Dữ liệu được cập nhật ngày: " + vietNam.Date.slice(0, 10);
        })
    </script>