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

    function objectives(){
        $db = dbConnect();

        $query = $db->prepare("SELECT `short_objective`, `objective` FROM `t_objectives`");
        $query->execute();

        return $query->fetchAll();
    }

    function firstname(){
        $db = dbConnect();

        $query = $db->prepare("SELECT `firstname` FROM `t_firstname`");
        $query->execute();

        return $query->fetchAll();
    }

    function lastname(){
        $db = dbConnect();

        $query = $db->prepare("SELECT `lastname` FROM `t_lastname`");
        $query->execute();

        return $query->fetchAll();
    }
?>