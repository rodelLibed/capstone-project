<?php
 session_start();
     include("admin/config/conn.php");
       
    
     if(isset($_POST['btn_login'])){
          $email_address = mysqli_escape_string($conn, $_POST['email_address']);
          $password = mysqli_escape_string($conn, $_POST['password']);

          $login_query = "SELECT * FROM t_users WHERE email_address='$email_address' AND password='$password'";
          $login_query_run = mysqli_query($conn, $login_query);

          if(mysqli_num_rows($login_query_run)>0){

            foreach($login_query_run as $data){
               $user_id = $data['id'];
               $user_name = $data['fn'].''.$data['ln'];
               $user_email = $data['email_address'];
               $role_as = $data['role_as'];
            }
            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = "$role_as"; // 1=admin , 0=users
            $_SESSION['auth_user'] = [
                 
               'user_id'=>$user_id,
               'user_name'=>$user_name,
               'user_email'=>$user_email,

            ];
             if($_SESSION['auth_role'] == '1'){  //for admin
              
              
              header("Location: admin/view-register");
               exit(0);
             }elseif($_SESSION['auth_role'] == '0'){ //for user
               
               header("Location: user_dash");
               exit(0);
             }

          }else{
            $_SESSION['message'] = "Invalid Email or Password";
            header("Location: login");
            exit(0);
          }
                   

     }else{
      
     }
     
    

?>