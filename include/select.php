<?php
    include "db.php";

    $sqls = 'SELECT * FROM users ';
    $result = mysqli_query($conn,$sqls);
        

    $return_arr = array();
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

    foreach ($users as $user){

        $id = $user['id'];
        $firstName = $user['firstName'];
        $lastName = $user['lastName'];
        $email = $user['email'];

        $return_arr[] = array("id" => $id,
                        "firstName" => $firstName,
                        "lastName" => $lastName,
                        "email" => $email);

    }


    // Encoding array in JSON format
    echo json_encode($return_arr);
 



