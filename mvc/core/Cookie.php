<?php

class Cookei extends DB{
    //xoa cookei
    public function delete(){
        if(isset($_COOKIE)){
            foreach($_COOKIE as $key => $value){
                setcookie($key, "", 1);//bat dau tu 1/1/1970
                setcookie($key,"",1,"/");
            }
        }
    }
    //set 1 cookei moi
    public function put($key, $value, $expiry){
        setcookie($key, $value, time() + $expiry, "/");

    }
    public function loginWithCookie()
    {
        if(isset($_COOKIE['user_name'])){
            //check user so voi user trong db
            $user = $_COOKIE['user_name'];
            $sql = "SELECT * FROM account WHERE user_name = '$user' ";
            $query = mysqli_query($this->con, $sql);
            $row = mysqli_fetch_array($query);

            if($row != 0) {
                if($row['user_hash'] == $_COOKIE['hash']) return json_encode($row);
            }
        }
    }
}

?>