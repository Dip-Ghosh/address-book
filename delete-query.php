<?php

require_once "config.php";

if ( isset( $_GET['id'] )) {

    $id      = $_GET['id'];

    $sql     = "DELETE FROM `contacts` WHERE `id`='$id'";
    $result  = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted successfully.";
        header("location: index.php");
        exit();
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}
