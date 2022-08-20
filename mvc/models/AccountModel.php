<?php
class AccountModel extends DB{
    const TABLE = "account";

    //lay tat ca cac tai khoan
     public function getAll($select = ['*'], $orderBy = []){
        return $this->all(self::TABLE, $select, $orderBy);
    }

    public function login($username){
        $value = "user_name = '".$username."'";
        return $this->find(self::TABLE, $value);

    }


    public function saveHash($id,$hash)
    {
        $value = "user_hash = '".$hash."'";
        $idString = 'user_id = ' . $id;

        $this->updateByID(self::TABLE,$idString,$value);

    }

    public function getAccount($user_id){
        $value = "user_id = '".$user_id."'";
        return json_encode( $this->find(self::TABLE, $value));
    }

    public function updatePassword($user_id,$newPass)
    {
        $value = "password = '".$newPass."'";
        $idString = 'user_id = ' . $user_id;

        $this->updateByID(self::TABLE,$idString,$value);
    }

    public function update($user_id, $user_name, $full_name, $date_of_birth, $email)
    {
          $value = "user_name = '".$user_name."',
                    full_name = '".$full_name."',
                    date_of_birth = '".$date_of_birth."',
                    email = '".$email."'";
             $idString = 'user_id = ' . $user_id;
        $this->updateByID(self::TABLE,$idString,$value);
        
    }

    public function delete($id)
    {
         $item = "user_id";
        return $this->deleteById(self::TABLE,$item, $id);
        
    }
    public function create($user_name,$full_name,$user_code,$password,$date_of_birth,$email,$role){
        /* $sql ="INSERT INTO `account` (`id`, `username`, `masv`, `fullname`, `password`, `dateofbirth`, `email`, `role`) VALUES (NULL, '', '$msv', '$fullname', '$password', '$dateofbrith', '$email', '$role')"; */
        $sql ="INSERT INTO account  VALUES (NULL, '$user_name', '$user_code', '$full_name', '$password', '$date_of_birth',  '$email', '$role', null)";
        $res= false;
        if(mysqli_query($this->con,$sql)){
             $res = true;
         }
         return json_encode($res);
    }



}
?>