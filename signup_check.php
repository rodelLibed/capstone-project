<?php
   session_start();
   include("admin/config/conn.php");
   if(isset($_POST['btn_signin'])){
      
       $fn = mysqli_real_escape_string($conn, $_POST['fn']);
       $mn = mysqli_real_escape_string($conn, $_POST['mn']);
       $ln = mysqli_real_escape_string($conn, $_POST['ln']);
       $email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);
       $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
      
       
      if($password==$confirm_password){
          $checkemail = "SELECT email_address FROM t_users WHERE email_address='$email_address'";
          $checkemail_run = mysqli_query($conn, $checkemail);

          if(mysqli_num_rows($checkemail_run)>0){
            $_SESSION['message']= "Email Already Exist";
            header("Location: signup");
            exit(0);
          }else{
               
          $user_query= "INSERT INTO t_users (fn,mn,ln,email_address,password)
          VALUES ('$fn', '$mn', '$ln', '$email_address', '$password')";
          $user_query_run = mysqli_query($conn, $user_query);

              if($user_query_run){
                $_SESSION['message']= "Success";
                header("Location: login");
                exit(0);
              }else{
                $_SESSION['message']= "Something went wrong";
                header("Location: signup");
                exit(0);
              }
          }

      }
      else{
        $_SESSION['message']= "Password Does Not Match";
        header("Location: signup");
        exit(0);
        
      }

    



   }else{
    header("Location: signup");
    exit(0);
   }

?>