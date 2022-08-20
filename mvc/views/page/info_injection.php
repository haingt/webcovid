<?php 
    $obj = json_decode($data["injection1"]);
    $obj2 = json_decode($data["injection2"]);
     
?>

<main class="container-fluid bgx py-5" style="min-height: 80vh;">

        
            <?php
                if( (!isset($obj) && !isset($obj2)  )){
                    echo '<div class="container py-5 bg-light mui"> 
                    <h3 class="text-center mb-5 mt-5" >Bạn chưa đăng ký tiêm </h3>
                    </div> ';
                }
                if(isset($obj)){
                    if($obj->status==0) {
                        $status="Chưa tiêm";
                        $obj->injection_date = "Chưa có lịch tiêm";
                        $obj->vaccine_name  = "Chưa có thông tin vaccine";
                     }
                     else $status = "Đã tiêm";
                    echo '<div class="container py-5 bg-light mui">
                    <div class="">
                    <h3 class="text-center mb-5" >Thông tin đăng ký tiêm </h3>
                    <h3>Mũi tiêm: 1</h3>
                    <hr>
                    <div class="row">
                        <div class=" col-6">
                            <h4>Họ  và tên: '.  $obj->full_name .'</h4>
    
                        </div>
                        <div class=" col-6">
                            <h4>Mã sinh viên: '. $obj->user_code.'</h4>
                        </div>
                        <div class=" col-6">
                            <h4>Ngày sinh: '. $obj->date_of_birth.'</h4>
                        </div>
                        <div class=" col-12">
                            <h4>Giới tính: '. $obj->gender.'</h4>
                        </div>
                        <div class=" col-md-6 col-12">
                            <h4>Căn cước công dân: '. $obj->indentity_card.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Số điện thoại: '. $obj->phone_number.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Địa chỉ liên hệ: '. $obj->address.'</h4>
                        </div>
    
                        <div class=" col-12">
                            <h4 style="color: red;"> Trạng thái: '. $status .'</h4>
                        </div>
                        <div class="col-12">
                            <h4>Ngày đăng ký: '. $obj->register_date.'</h4>
                        </div>
                        <div class="col-6">
                            <h4>Ngày tiêm: '. $obj->injection_date .' </h4>
                        </div>
                        <div class="col-6">
                            <h4> Loại vaccine: '. $obj->vaccine_name.'</h4>
                        </div>
                    </div>
                </div> 
                </div>    ';
                }
                 if( isset($obj2)){
                    if($obj2->status==0) {
                        $status="Chưa tiêm";
                        $obj2->injection_date = "Chưa có lịch tiêm";
                        $obj2->vacccine_name = "Chưa có thông tin vaccine";
                     }
                     else $status = "Đã tiêm";
                    echo '
                        <div class="container py-5 mt-5 bg-light mui">
                        <div class="">
                            <h3 class="text-center ">Thông tin đăng ký tiêm </h3>
                            <h3>Mũi tiêm: 2</h3>
                            <hr>
                            <div class="row">
                        <div class=" col-6">
                            <h4>Họ và tên: '.  $obj2->full_name .'</h4>
    
                        </div>
                        <div class=" col-6">
                            <h4>Mã sinh viên: '. $obj2->user_code.'</h4>
                        </div>
                        <div class=" col-6">
                            <h4>Ngày sinh: '. $obj2->date_of_birth.'</h4>
                        </div>
                        <div class=" col-12">
                            <h4>Giới tính: '. $obj2->gender.'</h4>
                        </div>
                        <div class=" col-md-6 col-12">
                            <h4>Căn cước công dân: '. $obj2->indentity_card.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Số điện thoại: '. $obj2->phone_number.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Địa chỉ liên hệ: '. $obj2->address.'</h4>
                        </div>
    
                        <div class=" col-12">
                            <h4 style="color: red;"> Trạng thái: '. $status .'</h4>
                        </div>
                        <div class="col-12">
                            <h4>Ngày đăng ký: '. $obj2->register_date.'</h4>
                        </div>
                        <div class="col-6">
                            <h4>Ngày tiêm: '. $obj2->injection_date .' </h4>
                        </div>
                        <div class="col-6">
                            <h4> Loại vaccine: '. $obj2->vaccine_name.'</h4>
                       <!-- </div>
                        <div class="col-4">
                                    <h4>Ngày tiêm mũi 1: 21/7/2021 </h4>
                                </div>
                                <div class="col-4">
                                    <h4> Loại vacxin: Astrazeneca</h4>
                                </div>
                                <div class="col-4 ">
                                    <h4> Cơ sở tiêm: Mỗ Lao - Hà Đông</h4>
                                </div> -->
                    </div>
                        </div>
                    ';
                }
             ?>
            
            
            
        <!-- mui2 -->
               
    </main>

     
   