<?php

require_once 'controller_form.php';

class Router{

    private $ctrlForm;

    public function __construct(){
        $this->ctrlForm = new CtrlForm();
    }

    public function requestRouter(){
        if(isset($_POST) && isset($_GET['action']) && $_GET['action'] == 'submit'){
            $selectObj1 = $this->getParameter($_POST, 'opt_obj_1');
            $selectObj2 = $this->getParameter($_POST, 'opt_obj_2');
            $selectObj3 = $this->getParameter($_POST, 'opt_obj_3');
            $selectFstn = $this->getParameter($_POST, 'firstname');
            $selectLstn = $this->getParameter($_POST, 'lastname');
            $radioResp = $this->getParameter($_POST, 'talk');
            $this->ctrlForm->getResult($selectObj1, $selectObj2, $selectObj3, $selectFstn, $selectLstn, $radioResp);
        }else{
            $this->ctrlForm->getForm();
        }
    }

    // $table check $_POST in requestRouter and $name the name in form
    private function getParametre($table, $name){
        if(isset($table[$name])){
            return $table[$name];
        }else{
            throw new Exception("Missing '$name' parameter");
        }
    }
}

?>
