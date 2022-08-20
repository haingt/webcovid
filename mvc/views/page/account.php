<?php 
        
       $changerpass;
       $list = json_decode($data["account"]);
       $date= date_create("$list->date_of_birth");
       $date = date_format($date,"d/m/Y");
     
      
       
   ?>
   <main>
       <div class="container-fluid " style="background-color: #d3dbf3;">
           <div class="container bg-info">
               <div class="row justify-content-center ">
                   <div class="col-md-8 col-9 bg-light  account ">
                       <h1>Thông tin tài khoản</h1>
                       <div class="row mt-5 bg-light m-0">
                           <div class="col-5">Họ và tên: </div>
                           <div class="col-5"><?php echo $list->full_name ?></div>
                           <div class="col-5 mt5">Ngày sinh: </div>
                           <div class="col-5"><?php echo $date; ?></div>
                           <div class="col-5">Tên Đăng nhập: </div>
                           <div class="col-5"><?php echo $list->user_name ?></div>
                           <div class="col-5">Email: </div>
                           <div class="col-5"><?php echo $list->email ?></div>
                           <!-- <div class="col-5">Mật Khẩu: </div>
                           <div class="col-5">*********</div> -->

                           <div class="col-5 mt-5">
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                   Đổi mật khẩu
                               </button>

                               <!-- Modal -->
                               <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Thay đổi mật khẩu</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                               </button>
                                           </div>

                                           <form action="./Account/changePass" method="POST">
                                                   <div class="modal-body">
                                                       <div class="form-group">
                                                               <label for="oldPass">Mật khẩu cũ</label>
                                                               <input type="password" class="form-control" id="oldPass" name="oldPass" placeholder="" required>
                                                               <p class="userError"></p>
                                                           </div>
                                                           <div class="form-group">
                                                               <label for="password" class="label">Mật khẩu mới</label>
                                                               <input type="password" class="form-control" id="password" name="password" placeholder="">
                                                               <p class="passwordError"></p>
                                                           </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                                                       <button type="submit" name="btnChangePass" class="btn btn-primary">Lưu thay đổi</button>
                                                   </div>                                                 
                                           </form>
                                           
                                           
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </main>

   
   <?php 
       function alert($msg) {
           echo "<script> $(document).ready(function(){
                   alert ('$msg');
               });</script>";
       } 
       $msg ="";
        if(isset($data["changerPass"])){

           if($data["changerPass"] == "True"){
               $msg = "Thay đổi mật khẩu thành công!";
           }
           else $msg = "Mật khẩu đã nhập không chính xác!";
           alert($msg);
       }
      
      
   
   ?>