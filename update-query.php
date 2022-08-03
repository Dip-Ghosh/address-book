<?php

require_once "config.php";

if ( isset( $_POST['update']) ) {

    $id          = $_POST['id'];
    $name        = isset($_POST['name']) ? $_POST['name'] : '';
    $firstName   = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $email       = isset($_POST['email']) ? $_POST['email'] : '';
    $city        = isset($_POST['city']) ? $_POST['city'] : '';
    $street      = isset($_POST['street']) ? $_POST['street'] :'';
    $zipCode     = isset($_POST['zipCode']) ? $_POST['zipCode'] : '';

    $sql = "UPDATE `contacts` 
        SET
            `first_name` = '$firstName',
            `name`      = '$name',
            `email`     = '$email',
            `city_id`   = '$city',
            `street`    = '$street',
            `zip_code`  = '$zipCode'
        
        WHERE `id`='$id'";

    $result = $conn->query($sql) ;

    if ($result == TRUE) {

        echo "New record created successfully.";
        header("location: index.php");
        exit();
    }else{
        echo "Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();

}
