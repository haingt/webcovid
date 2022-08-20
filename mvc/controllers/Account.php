<?php
if(!isset($_SESSION['user_id'])){

    header("location:".SITEURL."Login");
}
class Account extends Controller{
    private $account;

    function __construct()
    {
        $this->account = $this->model("AccountModel");
    }

    function index(){
        $user_id = $_SESSION['user_id'];
        $this -> view("layout",[
            "page" =>"account",
            "account" =>$this->account->getAccount($user_id)
        ]); 
    }

    public function changePass(){
        $user_id = $_SESSION["user_id"];
        $ress = false;
        if(isset($_POST["btnChangePass"])){
            $account = json_decode($this->account->getAccount($user_id));
            
            //data tu post
            $oldPass = $_POST["oldPass"];
            $newPass = $_POST["password"];

            $newPass = password_hash($newPass, PASSWORD_DEFAULT);
            
            if(password_verify("$oldPass", $account->password)){
               $res = $this->account->updatePassword($user_id,$newPass);
               $ress = true;
            }   

            
            else $ress = false;
            $this -> view("layout",[
                "page" =>"account",
                "changerPass" => $ress,
                "account" =>$this->account->getAccount($user_id),
                
            ]);
        }
    }


}

?>