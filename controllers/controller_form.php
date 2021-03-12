<?php 

require_once 'models/form.php';
require_once 'models/whiteboard.php';
require_once 'views/view.php';

class CtrlForm{

    public function getForm(){
        $form = new Form();
        $objectives = $form->getObjectives()->fetchAll();
        $firstname = $form->getFirstname();
        $lastname = $form->getLastname();
        $params = array('objectives' => $objectives, 'firstname' => $firstname, 'lastname' => $lastname);
        $view = new View("form");
        $view->generate($params);
    }

    public function getResults($selectObj1, $selectObj2, $selectObj3, $selectFstn, $selectLstn, $radioResp){
        $whiteboard = new Whiteboard($selectObj1, $selectObj2, $selectObj3, $selectFstn, $selectLstn, $radioResp);
        $params = array('whiteboard' => $whiteboard);
        $view = new View("whiteboard");
        $view->generate($params);
    }

}

?>
