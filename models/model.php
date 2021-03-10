<?php

//abstract = can't be use directly
abstract class Model{

    private $db;

    protected function executeRequest($sql, $params = null){
        if($params == null){
            $result = $this->getDb()->query($sql);
        }else{
            $result = $this->getDb()->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }

    private function getDb(){
        if($this->db == null){
            $this->db = new PDO("mysql:host=localhost;dbname=phasmophobia;charset=utf8",
            'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->db;
    }

}

?>
