<?php
    class whiteboard{
        private $objective1;
        private $objective2;
        private $objective3;
        private $firstname;
        private $lastname;
        private $response;

        public function setOptObj(string $obj1, string $obj2, string $obj3){
            $this->objective1 = $obj1;
            $this->objective2 = $obj2;
            $this->objective3 = $obj3;
        }
        
        public function getObjective1() {
            return $this->objective1;
        }

        function __construct(string $firstname, string $lastname){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }

        function displayName(){
            return '<p>' . $this->firstname . ' ' . $this->lastname . '</p>';
        }
    }

    $varohAlu = new whiteboard();
    echo $varohAlu->displayName();
?>