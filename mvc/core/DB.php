<?php
define("SITEURL", "http://localhost/webcoviddd/");
define("LOCALHOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");  
define("DB_NAME", "covid");
define("WEB_NAME", "coviddd");

class DB{
    public $con;

    function __construct()
    {
        $this->con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
        mysqli_select_db($this->con, DB_NAME);
        mysqli_query($this->con, "SET NAMES 'utf8' ");
        mysqli_set_charset($this->con, "utf8");

    }
    //get tat ca thong tin cua 1 bang
    public function all($table, $select = ['*'], $orderBys = [], $limit = null){
        $columns = implode(',', $select);//cac truong ma can hien thong tin, neu ko thi mac dinh la lay *, lay tat
        $orderByString = implode(' ', $orderBys);

        if($orderByString){
           
            if($limit){
                $sql = "SELECT ${columns} FROM ${table} ORDER BY ${orderByString} LIMIT  $limit ";
            }
            else{
                $sql = "SELECT ${columns} FROM ${table} ORDER BY ${orderByString} ";
            }
        }
        else{
            if($limit){
                $sql = "SELECT ${columns} FROM ${table} LIMIT  $limit";
            }
            else{
                $sql = "SELECT ${columns} FROM ${table}";
            }
        }
        $query = mysqli_query($this->con, $sql);
        //$query = $this->_query($sql);
        $data = [];

        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return json_encode($data);
    }
    


    //tim kiem theo ID
    public function find($table, $value){
        $sql = "SELECT * FROM ${table} WHERE $value LIMIT 1";
        $query =  $this->_query($sql);
        return mysqli_fetch_assoc($query);
        
    }
    // public function findByID($table, $select, $id){
    //     $colums = implode(",", $select);
    //     $sql = "SELECT ${colums} FROM ${table} WHERE $id LIMIT 1";
    //     $query = $this->_query($sql);
    //     return json_encode( mysqli_fetch_assoc($query) );

    // }
    //Udate theo ID
    public function updateByID($table, $id, $value){
        $sql = "UPDATE ${table} SET ${value} WHERE ${id}";
        $this->_query($sql);

    }

    //Delte theo ID
    public function deleteByID($table, $item, $id){
        $sql = "DELETE FROM ${table} WHERE ${item} = ${id}";
        $this->_query($sql);

    }


    private function _query($sql){
        return mysqli_query($this->con, $sql);
    }
}

?>