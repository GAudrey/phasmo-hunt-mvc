<?php 

require_once 'models/form.php';
require_once 'views/view.php';

class CtrlForm{
  
    private $form;

    public function __construct(){
        $this->form = new Form();
    }

    public function getForm(){
        $objectives = $this->form->getObjectives()->fetchAll();
        $firstname = $this->form->getFirstname();
        $lastname = $this->form->getLastname();
        $params = array('objectives' => $objectives, 'firstname' => $firstname, 'lastname' => $lastname);
        $view = new View("form");
        $view->generate($params);
    }
}

?>
