<?php
   session_start();
   include_once"config_php";
   $email = mysqli_real_escape-string($con, $_POST['email']);
   $password = mysqli_real_escape-string($con, $_POST['password']);
   if(!empty($email) && $!empty($password)){
    // check users email & password are matched to database 
        $sql = mysqli_query($con,"SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ");
        if(musqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "Success";

        }else{
            echo "Email or password is incorrect";
        }
   }else{
    echo "All input field are requered";
   }

   ?>