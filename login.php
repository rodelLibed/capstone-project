
 <?php
   @session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <link rel="stylesheet" href="./css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>
</head>
<script src="./javascript/jquery.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    body{
        background-color: #009d63;
    }
</style>


<body>
      <div class="container shadow" style="background-color: white; border-radius: 20px;">
           <div class="row m-5  align-items-center">
               <div class="col-12 col-md-6 d-none d-md-block">
                    <img src="./assets/login.gif" alt="" class="img-fluid">
               </div>
               <div class="col-12 col-md-6 p-5">
                    <h2 pb-3>E-Plant Monitoring System</h2>
                    <?php include('message.php') ?>
                     <span id="err_msg" ></span>
                            
                    <div class="form-section">
                        <form action="login_verify" method="POST" id="frm_login">
                            <div class="form-group pb-3 input-boxes">
                           
                                <input type="email" name="email_address" id="email" 
                                placeholder="Enter Your Email" class="form-control"  >
                                
                            </div>
                            <div class="form-group  pb-3">
                            <input type="password" name="password" id="password" 
                                placeholder="Enter Your Password" class="form-control" >
                            </div>

                            

                           
                                
                            <div class="pb-2">
                                     <button type="login" name="btn_login" id="btnlogin" class="btn btn-dark w-100 fw-bold mt-2">Login</button>
                                 </div>
                                
                            
                       
                                
                           
                                 <div class="pt-4 text-center">
                                    <a href="signup" class="text-decoration-none fw-bold" style="color: violet;">Create an account?</a>
                                     <span style="color: violet;">||</span>
                                    <a href="password_reset" class="text-decoration-none fw-bold" style="color: violet;">Forgot Password?</a>
                                    
                                 </div>
                        </form>
                    </div>
               </div>
           </div>
      </div>
</body>
</html>