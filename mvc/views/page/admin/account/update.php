<div class="col-9">
<?php 

    $list = json_decode($data["list"]);
    $full_name = $list->full_name;
    $user_name = $list->user_name;
    $date_of_birth = $list->date_of_birth;
    $email = $list->email
    
?>
            <div class="mt-5 ml-5">
                <h3>Sửa thông tin tài khoản: </h3>
                <form action="/webcoviddd/admin/updateA/<?php echo $list->user_id ?>" method="POST">
                    <div class="form-group">
                    <label for="fname">Họ tên :</label>
                    <input type="text" class="form-control" id="fname" name= "full_name" placeholder="" value="<?php echo $full_name?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter username" name="user_name"  value="<?php echo $user_name?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="pwd">Ngày sinh:</label>
                    <input type="date" class="form-control" id="pwd" placeholder="Enter date of birth" name="date_of_birth" value="<?php echo $date_of_birth?>">
                    </div>

                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email?>">
                    </div>
                    
                    
                    
                    <button type="submit" name = "btnsubmit" class="btn btn-primary ml-auto ">Lưu  thay đổi</button>
                </form>

                
            </div>
        </div>
    </div>

</body>

</html>