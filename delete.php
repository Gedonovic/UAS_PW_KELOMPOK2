<?php 
    include 'db_connect.php';
    $id = $_GET["id_relawan"];
    $sql = "DELETE FROM relawan WHERE id_relawan='".$id."' ";

    $result = $db->prepare($sql);
    $result->execute();

    header('Location: index.php')
?>
