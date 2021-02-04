<?php
    function dbConnect(){
        include('db.php');
        return new PDO("mysql:host=localhost;dbname=phasmophobia;charset=utf8", $phpUser, $phpPwd,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
        );
    }

    function getObjectives(){
        $db = dbConnect();

        $query = $db->prepare("SELECT * FROM `t_objectives`");
        $query->execute();

        return $query->fetchAll();
    }

    function getFirstname(){
        $db = dbConnect();

        $query = $db->prepare("SELECT * FROM `t_firstname`");
        $query->execute();

        return $query->fetchAll();
    }

    function getLastname(){
        $db = dbConnect();

        $query = $db->prepare("SELECT * FROM `t_lastname`");
        $query->execute();

        return $query->fetchAll();
    }

    function submitForm(){
        if(isset($_POST['submit'])){
            foreach($_POST['choose_obj'] as $choice){
                echo $secObj['objective'];
            };
            $selFrtn = $_POST['firstname'];
            $selLstn = $_POST['lastname'];
            $radioResp = $_POST['talk'];

            var_dump($_POST);
        }
    }
?>