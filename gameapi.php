<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "Model/database.php";

global $vgdb;

$sql = "SELECT * FROM games";

if (isset($_GET['genre'])){
    $sql .= " WHERE Genre = :genre";

    $stmt = $vgdb->prepare($sql);

    $stmt->bindValue(':genre', filter_input(INPUT_GET, 'genre', FILTER_SANITIZE_SPECIAL_CHARS));

    $stmt->execute();

    $qry = $stmt->fetchAll();
}
else{
    $qry = $vgdb->query($sql);
}


echo json_encode($qry->fetchAll());
?>