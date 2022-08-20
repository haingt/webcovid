<?php
class InjectionModel extends DB{
    const TABLE_1 = "injection_1";
    const TABLE_2 = "injection_2";

    //lay thong tin mui tiem 1
    public function getInjection1($user_id){
        $value = "account_id = '".$user_id."'";
        return json_encode( $this->find(self::TABLE_1, $value));
    }

    //lay thong tin mui tiem 2
    public function getInjection2($user_id){
        $value = "account_id = '".$user_id."'";
        return json_encode( $this->find(self::TABLE_2, $value));
    }

    //luu thong tin dang ki tiem mui 1
    public function register1($full_name,$user_code,$date_of_birth,$gender,$indentity_card,$phone_number,$address,$register_date,$account_id){
        $res= false;
       $sql = "INSERT INTO  injection_1
        VALUES (NULL, '$full_name', '$user_code', '$date_of_birth', '$gender','$indentity_card', '$phone_number', '$address', '$register_date', '', '$account_id', '','');";
       if(mysqli_query($this->con,$sql)){
           $res = true;
       }
       return json_encode($res);

    }
    
    public function register2($full_name,$user_code,$date_of_birth,$gender,$indentity_card,$phone_number,$address,$register_date,$account_id,$vaccine_1_name,$injection_1_date){
        $res= false;
     
       $sql = "INSERT INTO injection_2
       VALUES ('', '$full_name', '$user_code', '$date_of_birth', '$gender', '$indentity_card', '$phone_number', '$address', '$register_date', '0', '$account_id', NULL, NULL, '$vaccine_1_name', '$injection_1_date')";
       if(mysqli_query($this->con,$sql)){
           $res = true;
       }
       return json_encode($res);
    }

    //lay tat ca thong tin mui tiem 1
    public function getAll1($select = ['*'], $orderBy = []){
        return $this->all(self::TABLE_1, $select, $orderBy, null);
    }

    public function getAll2($select = ['*'], $orderBy = []){
        return $this->all(self::TABLE_2, $select, $orderBy, null);
    }

    //lay mui 
    public function getM1($id){
        $value = "injection_id = '".$id."'";
        return json_encode( $this->find(self::TABLE_1, $value));
    }
    public function getM2($id){
        $value = "injection_id = '".$id."'";
        return json_encode( $this->find(self::TABLE_2, $value));
    }

    public function delete1($id)
    {
         $item = "injection_id";
        return $this->deleteById(self::TABLE_1,$item, $id);
        
    }

    public function delete2($id)
    {
         $item = "injection_id";
        return $this->deleteById(self::TABLE_2,$item, $id);
        
    }

    // public function update1($id,$status,$vaccine_name,$injection_date){
    //     $sql = "UPDATE `muitiem1` SET `trangthai` = '$trangthai', `tenvacxin` = '$tenVacxin', `ngaytiem` = '$ngaytiem' WHERE muitiem1.id = '$id'";
    //     $res= false;
    //     if(mysqli_query($this->con,$sql)){
    //          $res = true;
    //      }
    //      return json_encode($res);
    //  }

     public function update1($id,$status,$vaccine_name,$injection_date)
    {
          $value = 
                    " status = '".$status."',
                     vaccine_name = '".$vaccine_name."',
                     injection_date = '".$injection_date."'";
          
             $idString = 'injection_id = ' . $id;
        $this->updateByID(self::TABLE_1,$idString,$value);
        
    }

    public function update2($id,$status,$vaccine_name,$injection_date)
    {
          $value = 
                    " status = '".$status."',
                     vaccine_name = '".$vaccine_name."',
                     injection_date = '".$injection_date."'";
          
             $idString = 'injection_id = ' . $id;
        $this->updateByID(self::TABLE_2,$idString,$value);
        
    }

    //  public function update2($id,$trangthai,$tenVacxin,$ngaytiem){
    //     $sql = "UPDATE `muitiem2` SET `trangthai` = '$trangthai', `tenvacxin` = '$tenVacxin', `ngaytiem` = '$ngaytiem' WHERE muitiem2.id = '$id'";
    //     $res= false;
    //     if(mysqli_query($this->con,$sql)){
    //          $res = true;
    //      }
    //      return json_encode($res);
    //  }

    


}

?>