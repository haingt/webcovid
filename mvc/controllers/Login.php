<?php
class Login extends Controller
{
    private $login;
    private $cookie;

    function __construct()
    {
        $this->login = $this->model("AccountModel");

        $this->cookie = new Cookei();
    }

    //view
    function index()
    {
        $this->view("no_header_layout", [
            "page" => "login"
        ]);
    }

    function check()
    {
        if (isset($_POST['btnLogin'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if (empty($_POST['username']) || empty($_POST['password'])) {

                $this->view("no_header_layout", [
                    "page" => "login",
                    "msg" => "Nhập thiếu trường thông tin, vui lòng nhập lại"
                ]);
            } else {
                $res = $this->login->login($user);
               
                // $res2 = mysqli_num_rows($res);
                // var_dump($res);
                // die();
                if ($res) {//neu truy cap toi duoc database
                    $id = $res['user_id'];
                    $username = $res['user_name'];
                    $password = $res['password'];
                    $role = $res['role'];
                    if (password_verify($pass, $password)) {
                        $_SESSION['user_id'] = $id;
                        $_SESSION['user_name'] = $username;
                        $_SESSION['role'] = $role;

                        //check remember
                        if (!empty($_POST['remember'])) {
                            $this->cookie->put("user_name", $username, time() + (10 * 365 * 24 * 60 * 60));


                            $hash = password_hash(openssl_random_pseudo_bytes(16), PASSWORD_BCRYPT);
                            $this->cookie->put("hash", $hash, time() + (10 * 365 * 24 * 60 * 60));

                            $this->login->saveHash($id, $hash);
                            header('Location: ' . SITEURL . 'Home');
                        }
                        header('Location: ' . SITEURL . 'Home');
                    } else {
                        $this->view("no_header_layout", [
                            "page" => "login",
                            "msg" => "Nhập sai mật khẩu, vui lòng nhập lại"
                        ]);
                    }
                } else {
                    $this->view("no_header_layout", [
                        "page" => "login",
                        "msg" => "Tài khoản không hợp lệ, vui lòng nhập lại"
                    ]);
                }
            }
        }
    }

    function logout()
    {
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_name"]);
        unset($_SESSION["role"]);
        session_destroy();
        
        $res = new Cookei();
        $res->delete();

        $this->index();
    }
}
