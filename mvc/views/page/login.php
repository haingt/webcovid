<div class="container-fluid bgx" style="min-height: 100vh;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Logo_PTIT.jpg/1024px-Logo_PTIT.jpg" alt="g" class="rounded mx-auto d-block" style="max-width: 150px;">

    <div class="txt text-danger - text-center font-weight-bold mt-3 ">
        <h2>PTIT COVID</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6 col-xs-12 row-container">
             
            <form action="./Login/check" method="POST">
                <h1>Đăng nhập</h1>
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter email" required>
                    <p class="userError"></p>
                </div>
                <div class="form-group">
                    <label for="password" class="label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <p class="passwordError"></p>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="remember"class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Lưu thông tin</label>
                </div>
                <button type="submit" name="btnLogin" class="btn btn-success btn-block my-3">Đăng nhập</button>
            </form>

            
        </div>
    </div>
</div>

<!--  //validate  -->
<script>
    function validatePassword(inputPassword) {
        return inputPassword.length > 4;
    }

    function validateUsername(input) {
        return input.length > 5;
    }

    $(document).ready(function() {
        $('#username').change(function() {
            var user = $(this).val().trim();
            if (!validateUsername(user)) {
                $(".userError").html("Tên đăng nhập phải dài hơn 6 ký tự");
            } else $(".userError").html("");
        });
        $('#password').change(function() {
            var password = $(this).val();
            if (!validatePassword(password)) {
                $(".passwordError").html("Mật khẩu phải dài hơn 5 ký tự");
            } else {
                $(".passwordError").html("");
            }
        });
    })
</script>

<?php
    function alert($msg) {
        echo "<script> $(document).ready(function(){
                alert ('$msg');
            });</script>";
    } 
    $msg ="";
     if(isset($data["msg"])){
        alert($data["msg"]);
    }
    //echo $data["msg"];
?>

