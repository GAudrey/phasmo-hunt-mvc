<?php
    function dbConnect(){
        include('db.php');
        return new PDO("mysql:host=localhost;dbname=phasmophobia;charset=utf8", $phpUser, $phpPasswd,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
        );
    }
?>