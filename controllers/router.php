<?php

require_once('form_controller.php');

class router{

    private $ctrlForm;

    public function __construct(){
        $this->ctrlForm = new ctrlForm();
    }

    public function requestRouter(){
        if(isset($_POST) && isset($_GET['action']) && $_GET['action'] == 'submit'){
            $form = $_POST['firstname'];
            $this->ctrlForm->submit($form);
        } 
        else{
            $this->ctrlForm->getForm();
        }
    }
}

?>