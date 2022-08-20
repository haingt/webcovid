<?php
if(!isset($_SESSION['user_id'])){

    header("location:".SITEURL."Login");
}
class Admin extends Controller{
    private $post;
    private $injection;
    private $account;

    function __construct()
    {
        if($_SESSION["role"] == "user")   
        header("location:".SITEURL."Login");
        $this ->post = $this->model("PostModel");
        $this ->injection = $this->model("InjectionModel");
        $this ->account = $this->model("AccountModel");
    }

    function index(){
        $this->view("layout_admin",[
            "page" => "admin/homeA",
            ]);
    }

    //crud tai khoan
    function listAcc(){
            $select = ['*'];
            $orderBy = ['user_id'];
            
        $this->view("layout_admin",[
            "page" => "admin/account/list",
            "list" => $this->account->getAll($select, $orderBy)
            ]);
    }

    function UpdateAcc($user_id){
        $this->view("layout_admin",[
            "page" => "admin/account/update",
            "list" => $this->account->getAccount($user_id)
            ]);    
    }

    function updateA($id){
       
        if(isset($_POST["btnsubmit"])){
            $full_name = $_POST["full_name"];
            $user_name = $_POST["user_name"];
            $date_of_brith = $_POST["date_of_birth"];
            $email = $_POST["email"];
            $this->account->update($id,$user_name,$full_name,$date_of_brith,$email);
           
            
            $this->view("layout_admin",[
                "page" => "admin/account/list",
                "list" => $this->account->getAll()
                ]);
        }
    }

    function DeleteAccount($id){
        $res = $this->account->delete($id);
        $this->view("layout_admin",[
            "page" => "admin/account/list",
            "list" => $this->account->getAll(),
            "delete" => $res
            ]);   
    }

    function createAcc(){
        $this->view("layout_admin",[
            "page" => "admin/account/create",
            ]); 
                  
    }

    function createAc(){
        if(isset($_POST["btnsubmit"])){
            $full_name = $_POST["full_name"];
            $user_name = $_POST["user_name"];
            $date_of_brith = $_POST["date_of_birth"];
            $user_code = $_POST["user_code"];
            $email = $_POST["email"];
            $role =$_POST["role"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->account->create($user_name,$full_name,$user_code,$password,$email,$date_of_brith, $role);
            $this->view("layout_admin",[
                "page" => "admin/account/list",
                "list" => $this->account->getAll()
                ]);
        }
    }

    //quan ly bai viet
    function ListPost(){
        $this->view("layout_admin",[
            "page" => "admin/post/list",
            "list" => $this->post->getAll()
            ]);
        /* $this->view("layout_admin",[
            "page" => "admin/post/list",
            ]); */
    }
    function EditPost($id){
        $this->view("layout_admin",[
            "page" => "admin/post/update",
            "list" => $this->post->getItemByID($id)
            ]);
    }

    function updatePost($id){
        if(isset($_POST["btnsubmit"])){
            $title = $_POST["title"];
            $text_top = $_POST["text_top"];
            $text_bottom = $_POST["text_bottom"];
            $sub_thumbnail = $_POST["sub_thumbnail"];
            
            if(isset($_FILES["thumbnail"])){
                $file = $_FILES["thumbnail"];
                $file_name = $file["name"];
                move_uploaded_file($file["tmp_name"],'./public/upload/'.$file_name);
                //echo $file_name;
                $res = $this->post->update($id,$title, $file_name,$sub_thumbnail,$text_top,$text_bottom);
                $this->view("layout_admin",[
                    "page" => "admin/post/list",
                    "list" => $this->post->getAll(),
                    "msg" => $res
                    ]); 
            }
                
            
        }
    }

    function CreatePost(){
        $this->view("layout_admin",[
            "page" => "admin/post/create",
            ]);
    }

    function crpost(){
        if(isset($_POST["btnsubmit"])){
            $title = $_POST["title"];
            $text_top = $_POST["text_top"];
            $text_bottom = $_POST["text_bottom"];
            $sub_thumbnail = $_POST["sub_thumbnail"];
            if(isset($_FILES["thumbnail"])){
                $file = $_FILES["thumbnail"];
                $file_name = $file["name"];
                move_uploaded_file($file["tmp_name"],'./public/upload/'.$file_name);
                $res = $this->post->Create($title, $file_name,$sub_thumbnail,$text_top,$text_bottom);
                $this->view("layout_admin",[
                    "page" => "admin/post/list",
                    "list" => $this->post->getAll(),
                    "msg" => $res
                    ]);
            }
                
        }
    }
    function DeletePost($id){
        $res = $this->post->delete($id);//thuc hien xoa truoc
        $this->view("layout_admin",[
            "page" => "admin/post/list",
            "list" => $this->post->getAll(),
            "delete" => $res
            ]);
    }

//quan ly thong tin tiem
    //lay mui tiem 1
    function ListM1(){
        $this->view("layout_admin",[
            "page" => "admin/vaccination/list",
            "list1" => $this->injection->getAll1()
            ]);
    }
    function ListM2(){
        $this->view("layout_admin",[
            "page" => "admin/vaccination/list2",
            "list2" => $this->injection->getAll2()
            ]);
    }

    
    function UpdateM1($id){
        $this->view("layout_admin",[
            "page" => "admin/vaccination/update",
            "list" => $this->injection->getM1($id)
            ]);
    }

    function upm1($id){
        if(isset($_POST["btnsubmit"])){
            $status = $_POST["status"];
            $injection_date = $_POST["injection_date"];
            $vaccine_name = $_POST["vaccine_name"];
            $res = $this->injection->update1($id,$status,$vaccine_name,$injection_date);
            header('Location:'.SITEURL.'admin/ListM1');
        }
    }

    function DeleteM1($id){
        $res = $this->injection->delete1($id);
        header('Location:'.SITEURL.'admin/ListM1');
        /* $this->view("layout_admin",[
            "page" => "admin/injection/list",
            "list" =>  $this->injection->getAll1(),
            "delete" => $res
            ]); */
    }

   


    function UpdateM2($id){
        $this->view("layout_admin",[
            "page" => "admin/vaccination/update2",
            "list" => $this->injection->getM2($id)
            ]);
    }
    function upm2($id){
        if(isset($_POST["btnsubmit"])){
            $status = $_POST["status"];
            $injection_date = $_POST["injection_date"];
            $vaccine_name = $_POST["vaccine_name"];
           
            $res = $this->injection->update2($id,$status,$vaccine_name,$injection_date);
            header('Location:'.SITEURL.'admin/ListM2');
            
           
        }
    }

    function DeleteM2($id){
        $res = $this->injection->delete2($id);
        header('Location:'.SITEURL.'admin/ListM2');
        /* $this->view("layout_admin",[
            "page" => "admin/injection/list2",
            "list" => $this->injection->getAll2()
            ]); */
    }

   







    




}