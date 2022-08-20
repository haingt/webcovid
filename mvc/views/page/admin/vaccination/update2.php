<div class="col-9">
<?php 

    $item = json_decode($data["list"]); 
    $date = date("Y-m-d");    
?>
            <div class="mt-5 ml-5">
                <h3>Sửa thông tin đăng ký tiêm: </h3>
                <form action="./admin/upm2/<?php echo $item->injection_id ?>" method="POST">
                    <div class="form-group">
                    <label for="fname">Họ tên: </label>
                    <input type="text" class="form-control" id="fname" name= "full_name" placeholder="" readonly value="<?php echo $item->full_name?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="msv">Mã sinh viên: </label>
                    <input type="text" class="form-control" id="pwd" placeholder="" name="user_code" readonly value="<?php echo $item->user_code?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="pwd">Ngày đăng ký: </label>
                    <input type="date" class="form-control" id="pwd" placeholder="" name="register_date" value="<?php echo $item->register_date?>">
                    </div>
                    <div class="form-group col-12 p-0">
                            <label for="trangthai" class="m-0"> Trạng thái : </label>
                            <select name="status" id="trangthai">
                                    <option value="0">Chưa tiêm</option>
                                    <option value="1">Đã tiêm</option>
                                </select>
                        </div>
                        <div class="form-group">
                    <label for="vacxin">Tên vacxin: </label>
                    <input type="text" class="form-control" id="vacxin" placeholder="" name="vaccine_name"  value="">
                    </div>
                    
                    <div class="form-group">
                    <label for="ngaytiem">Ngày tiêm: </label>
                    <input type="date" class="form-control" id="ngaytiem" placeholder="" name="injection_date" value="<?php echo $date ?>">
                    </div>
                    <button type="submit" name="btnsubmit" class="btn btn-primary ml-auto ">Lưu  thay đổi</button>
                </form>


                
            </div>
        </div>
    </div>

</body>

</html>