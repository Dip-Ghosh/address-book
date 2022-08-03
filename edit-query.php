<?php

require_once "config.php";

if ( isset( $_GET['id'] )) {

    $id      = $_GET['id'];
    $sql     = "Select * FROM `contacts` WHERE `id`='$id'";
    $result  = $conn->query($sql);
    $cities  = "select * from cities where status=1";
    $cities  = $conn->query($cities);

    while($res = mysqli_fetch_array($result))
    {
        $id         = $res['id'];
        $name       = $res['name'];
        $firstName  = $res['first_name'];
        $email      = $res['email'];
        $cityId     = $res['city_id'];
        $street     = $res['street'];
        $zipCode    = $res['zip_code'];
    }
    $conn->close();

}
