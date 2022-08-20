<?php
if(!isset($_SESSION['user_id'])){

    header("location:".SITEURL."Login");
}
class Vaccination extends Controller{
    private $injection;

    function __construct()
    {
        $this->injection = $this->model("InjectionModel");
    }

    function index(){
        $this->view("layout", [
            "page"=> "injection"
        ]);
    }

    function infoInjection(){
        //echo 1;
        if(isset($_SESSION["user_id"])){

            $user_id = $_SESSION["user_id"];
            $res =  $this->injection->getInjection1($user_id);
            $obj = json_decode($res);
            if(empty($obj)){
                $data = array("Thông báo: Bạn chưa đăng ký tiêm.");
            }
            //else echo $res;
            $this->view("layout",[
                "page" => "info_injection",
                "injection1" => $this->injection ->getInjection1($user_id),
                "injection2" => $this->injection ->getInjection2($user_id)
                ]);
        }
    }
    function check(){
        if(isset ($_POST["btnsubmit"]))  {
            // if(!isset($_SESSION["idAccount"])){
            //     $_SESSION["msg"] = "register";
            //     //self::index();
            //      header("location: http://localhost/webcovid/Vaccination");
            //     //$this->index();
            //     // $this->view("layout",[
            //     // "page" => "injection"
            //     // ]);
            //  }
            //  else{
            //     $_SESSION["msg"] = "true";
            //     header("location: http://localhost/webcovid/Vaccination");
            //  }
            //else{
                $full_name = $_POST["full_name"];
                $user_code = $_POST["user_code"];
                $date_of_birth = $_POST["date_of_birth"];
                $gender = $_POST["gender"];
                $indentity_card =$_POST["indentity_card"];
                $phone_number = $_POST["phone_number"];
                $address = $_POST["address"];
                $injection = $_POST["injection"];
                $register_date = date("Y-m-d");
    
                $vaccine_1_name = $_POST["vaccine_1_name"];
                $injection_1_date = $_POST["injection_1_date"];
                $account_id = $_SESSION["user_id"];
                if($injection == '1'){
                    $res = $this->injection->register1($full_name,$user_code,$date_of_birth,$gender,$indentity_card,$phone_number,$address,$register_date,$account_id);
                    if($res == "true") {
                        $_SESSION["msg"] = "true";
                        header("location:".SITEURL."Vaccination");
                        //self::index();
                    }
                   
                    // $this->view("layout",[
                    //    "page" => "tiemchung",
                    //    "msg"  => "True"
                    //    ]);
                }
                else if($injection == '2'){
                    $res = $this->injection->register2($full_name,$user_code,$date_of_birth,$gender,$indentity_card,$phone_number,$address,$register_date,$account_id,$vaccine_1_name,$injection_1_date);
                    if($res == "true") {
                        $_SESSION["msg"] = "true";
                        header("location:".SITEURL."Vaccination");
                    }

                    // $_SESSION["msg"] = "true";
                    // self::index();
                    // $this->view("layout",[
                    //    "page" => "tiemchung",
                    //    "msg"  => "True"
                    //    ]);     
               // }

           }
          
        } 
   }
}
?>