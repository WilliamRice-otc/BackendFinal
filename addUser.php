<?php
    include "database.php";


    function adduser($email){
        $apiKey = bin2hex(random_bytes(15));
        global $vgdb;
        $sql = "INSERT INTO users (`email`, `apiKey`) VALUES ('$email', '$apiKey')";
    }

    function addGame($genre, $title, $releasetime){}

    function editGame($genre, $title, $releasetime){

    }

?>