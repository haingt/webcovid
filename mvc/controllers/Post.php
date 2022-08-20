<?php
class Post extends Controller{
    private $post;

    function __construct()
    {
        $this->post = $this->model("PostModel");
    }

    function index(){
        $this->view("layout",[
            "page" => "news",
            "list" => $this->post->getAll()
            ]);
    }

    function detail($id){
       
        $this -> view("layout",[
           "page" =>"detail",
           "postItem" => $this->post->getItemByID($id)
       ]);
      //var_dump( json_decode( $this->post->getItemByID($id)));
   }

    
}

?>