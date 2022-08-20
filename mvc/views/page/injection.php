<div class="container-fluid" style="background-color: #d3dbf3;">
    <div class="container py-5 bg-light">
        <h3 class="text-center ">Đăng ký tiêm chủng</h3>


        <form action="./Vaccination/check" method="POST">

            <div class="row">
                <div class="form-group col-6">
                    <label for="name">Họ và tên:</label>
                    <input type="text" class="form-control" id="name" name="full_name" aria-describedby="emailHelp" placeholder="Vui lòng nhập đầy đủ họ và tên" required>
                </div>
                <div class="form-group col-6">
                    <label for="msv">Mã sinh viên:</label>
                    <input type="text" class="form-control" id="msv" name="user_code" placeholder="Mã sinh viên" required>
                </div>
                <div class="form-group col-6">
                    <label for="ngaysinh">Ngày sinh:</label>
                    <input type="date" class="form-control" id="ngaysinh" name="date_of_birth" placeholder="Ngày sinh" required>
                </div>


                <div class="form-group col-12">
                    <label for="gioitinh"> Giới tính:</label>
                    <select name="gender" id="gioitinh">
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>

                    </select>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="CMT">Chứng minh thư/ CCCD</label>
                    <input type="text" class="form-control" id="CMT" name="indentity_card" placeholder="Chứng minh thư/ CCCD" required>
                </div>
                <div class="form-group col-6 ">
                    <label for="sodienthoai">Số điện thoại</label>
                    <input type="text" class="form-control" id="sodienthoai" name="phone_number" placeholder="Điện thoại" required>
                </div>
                <div class="form-group col-6 ">
                    <label for="diachi">Địa chỉ liên hệ</label>
                    <input type="text" class="form-control" id="diachi" name="address" placeholder="Địa chỉ" required>
                </div>
                <div class="form-group col-12">
                    <label for="muiTiem"> Đăng ký tiêm mũi: </label>
                    <select name="injection" id="muiTiem">
                        <option value="1"> Mũi 1</option>
                        <option value="2">Mũi 2</option>
                    </select>
                </div>

                


                <div class="select-1" id="mui2Selected" style="display: none;">
                    <h4 class="px-3">Thông tin mũi tiêm thứ 1.</h4>
                    <div class="row px-3">
                        <div class="form-group  col-12">
                            <label for="loaivacxin"> Loại Vacxin: </label>
                            <select name="vaccine_1_name" id="loaivacxin">
                                <option value="astrazeneca">Astrazeneca</option>
                                <option value="fifzer">fifzer</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="ngaytiem1">Ngày tiêm</label>
                            <input type="date" class="form-control" id="ngaytiem1" name="injection_1_date" placeholder="">
                        </div>

                        <!-- <div class="form-group col-md-6 col-12">
                            <label for="cosotiem">Cơ sở tiêm</label>
                            <input type="text" class="form-control" id="cosotiem" name="cosotiem" placeholder="Phường Mỗ Lao - Hà Đông - Hà Nội">
                        </div> -->
                    </div>
                </div>

            </div>
            <button type="submit" name="btnsubmit" class="btn btn-outline-primary ml-auto ">Đăng ký</button>
        </form>
    </div>
</div>

<!--  //validate  -->
<script>
    $(document).ready(function() {
        $('#muiTiem').on('change', function() {
            if (this.value == '2') {
                $("#mui2Selected").show();
            } else {
                $("#mui2Selected").hide();
            }
        });
    });
</script>

<?php
function alert($msg)
{
    echo "<script> $(document).ready(function(){
                    alert ('$msg');
                });</script>";
    }
    // $msg ="";
    //      if(isset($data["msg"])){
    //         if($data["msg"] == "True"){
    //             $msg = "Đăng ký thành công!";
    //         }
    //         else $msg = "Đăng ký thất bại!";
    //         alert($msg);
    //     }    
    $msg = "";
    if (isset($_SESSION["msg"])) {
        if ($_SESSION["msg"] == "true") {
            $msg = "Đăng ký thành công!";
        // } else if ($_SESSION["msg"] == "register") {
        //     $msg = "Vui lòng đăng nhập";
        } else $msg = "Đăng ký thất bại!";
        alert($msg);
        unset($_SESSION["msg"]);
    }
?>