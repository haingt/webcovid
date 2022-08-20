<?php

class PostModel extends DB{

    const TABLE = "post";

    //lay 3 bai viet moi nhat tu post
    public function getItemHomepage($select = ['*'], $orderBy = [], $limit ){
        return $this->all(self::TABLE, $select, $orderBy, $limit);
    }

    //lay tat ca cac bai viet
    public function getAll($select = ['*'], $orderBy = []){
        return $this->all(self::TABLE, $select, $orderBy, null);
    }
    public function getItemByID($id){
        $value = "id = '".$id."'";
        return json_encode($this->find(self::TABLE, $value));

    }

    public function update($id, $title, $file_name, $sub_thumbnail, $text_top, $text_bottom)
    {
          $value = "id = '".$id."',
                    title = '".$title."',
                    thumbnail = '".$file_name."',
                    sub_thumbnail = '".$sub_thumbnail."',
                    text_top = '".$text_top."',
                    text_bottom = '".$text_bottom."'";
          
             $idString = 'id = ' . $id;
        $this->updateByID(self::TABLE,$idString,$value);
        
    }
    public function create($title,$file_name,$sub_thumbnail,$text_top,$text_bottom){
       
        $sql ="INSERT INTO post  VALUES (NULL, '$title', '$file_name', '$sub_thumbnail', '$text_top', '$text_bottom')";
        $res= false;
        if(mysqli_query($this->con,$sql)){
             $res = true;
         }
         return json_encode($res);
    }

    public function delete($id)
    {
         $item = "user_id";
        return $this->deleteById(self::TABLE,$item, $id);
        
    }

}

?>