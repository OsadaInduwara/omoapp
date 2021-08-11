<?php


    include("./connection.php");

    $userEmail = $_GET["email"];
    $userPassword = $_GET["password"];

    if(!isset($userEmail) || !isset($userPassword)) {
        echo json_encode(
            array(
                'message' => 'error'
            )
        );
    } else {
        $query = "select * from user where email='$userEmail' AND password='$userPassword'";
        $result = mysqli_query($con, $query);
        $array = mysqli_fetch_array($result);
    
        $ID = $array['id'];
        $name = $array['name'];
        $username = $array['username'];
        $email = $array['email'];

        echo json_encode(
            array(
                'id' =>  $ID,
                'name' =>   $name,
                'username' => $username,
                'email' => $email
            )
        );
    }
?>