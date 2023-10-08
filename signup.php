<?php
   session_start();
   include_once"config_php";
   $fname = mysqli_real_escape-string($con, $_POST['fname']);
   $lname = mysqli_real_escape-string($con, $_POST['lname']);
   $email = mysqli_real_escape-string($con, $_POST['email']);
   $password = mysqli_real_escape-string($con, $_POST['password']);

   if(!empty($fname)) && !empty($lname) !empty($email) !empty($password)
   { 
    // check email is valid or not
        if(filter_var($email, filter_validate_email)){
        // check email is already register or not
        $sql = mysqli_query($con,"SELECT email FROM user WHERE email = '{$email}'");
            if(mysqli_num_rows($sql)>0) 
        // email is aledy register
                {
                    echo "$email, this email already register"
                }
                // insert data into a table
                $sql2 = mysqli_query($con, "INSERT INTO users(unique_id,fname,lname,email,password,status)
                                        VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}','{}')");
                if($sql2){
                    // if data is inserted
                    $sql3 = mysqli_query($con,"SELECT * FROM users WHERE email = '{$email}' ");
                    if(mysqli_num_rows($sql3) > 0){
                        $row = mysqli_fetch_assoc($sql3);
                        $_SESSION['unique_id'] = $row['unique_id'];
                        echo "Success";
                    }
                  }else{

                  }
            }else{
        echo "$eamil,this is not valid email" 

    }else{
        echo "All input field are required";
    }
   }

?>