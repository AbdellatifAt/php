<?php

    include 'db.php';


    $firstName = $_POST["firstName"];
    $lastName =  $_POST["lastName"];
    $email  = $_POST["email"];


   if(isset($_REQUEST)){

   // verification aucun Error 

    $sql = "INSERT INTO users(firstName,lastName,email) VALUES ('$firstName','$lastName','$email')";
  
    
    if(mysqli_query($conn,$sql)){
        $elem  = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn , $elem);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
         
        $val = $users[0];
        foreach ($users as $user) {
            if($user['id']>$val['id']){
                $val = $user;
            }
            
        }

        $response = json_encode($val);
        echo $response;
     }
      else{
          echo 'error'. mysqli_error($conn);
      }
   }
   


/*
  

    

