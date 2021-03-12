<?php

require_once 'models/model.php';

class Form extends Model{

    public function getObjectives(){
        $sql = "SELECT `id_objective`, `objective` FROM `t_objectives`";
        $objectives = $this->executeRequest($sql);
        return $objectives;
    }

    public function getFirstName(){
        $sql = "SELECT `firstname` FROM `t_firstname`";
        $firstname = $this->executeRequest($sql);
        return $firstname;
    }

    public function getLastName(){
        $sql = "SELECT `lastname` FROM `t_lastname`";
        $lastname = $this->executeRequest($sql);
        return $lastname;
    }
    
}

?>
