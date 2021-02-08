<?php
    function dbConnect(){
        include('components/db.php');
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

    function getFirstName(){
        $db = dbConnect();

        $query = $db->prepare("SELECT * FROM `t_firstname`");
        $query->execute();

        return $query->fetchAll();
    }

    function getLastName(){
        $db = dbConnect();

        $query = $db->prepare("SELECT * FROM `t_lastname`");
        $query->execute();

        return $query->fetchAll();
    }
?>