<?php
class Home extends Controller
{
    private $post;
    private $cookei;

    function __construct()
    {
        $this->post = $this->model("PostModel");

        $this->cookei = new Cookei();
        $res = $this->cookei->loginWithCookie();

        if(isset($res)){
            $ress = json_decode($res);
            $_SESSION["user_id"] = $ress->user_id;
            $_SESSION["user_name"] = $ress->user_name;
            $_SESSION["role"] = $ress->role;
        }
    }

    function index()
    {
        $select = ['*'];
        $orderBy = [];
        $limit = 3;
        
        $this->view("layout", [
            "page" => "home",
            "list" => $this->post->getItemHomepage($select, $orderBy, $limit)
            //"list" => $this->post->getAll()
        ]);
    }
}
