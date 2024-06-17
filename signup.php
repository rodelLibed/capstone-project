
 <?php
   session_start();
   
?>



<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>SignUp</title>
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
           <div class="row m-5 align-items-center">
               <div class="col-12 col-md-6 d-none d-md-block">
                    <img src="./assets/signup.gif" alt="" class="img-fluid ">
               </div>
               <div class="col-12 col-md-6 p-5">
                    <h2 pb-3>Create An Account</h2>
                     <?php include('message.php') ?>
                    <div class="form-section ">
                        <form action="signup_check" method="post" id="frm_signup">
                            <div class="form-group pb-2">
                                <input type="text" name="fn" id="fn"
                                placeholder="Enter Your First Name" class="form-control"  required>
                            </div>
                            <div class="form-group  pb-2">
                            <input type="text" name="mn"  id="mn"
                                placeholder="Enter Your Middle Name" class="form-control"  required>
                            </div>

                            <div class="form-group  pb-2">
                            <input type="text" name="ln"   id="ln"
                                placeholder="Enter Your Last Name" class="form-control"  required>
                            </div>

                            <div class="form-group  pb-2">
                            <input type="email" name="email_address" id="email"
                                placeholder="Enter Your Email" class="form-control"  required>
                            </div>

                        

                            <div class="form-group  pb-2">
                            <input type="password" name="password"  id="password"
                                placeholder="Enter Password" class="form-control"  required>
                            </div>

                            <div class="form-group  pb-2">
                            <input type="password" name="confirm_password"  id="confirm_password"
                                placeholder="Confirm Password" class="form-control"  required>
                            </div>
                        
                       
                                 <div class="pb-2">
                                     <button type="signup" name="btn_signin" id="btn_signup"class="btn btn-dark w-100 fw-bold mt-2">SignUp</button>
                                 </div>
                           
                                 <div class="pt-4 text-center">
                                    <a href="login" class="text-decoration-none fw-bold" style="color: violet;">Already have an account?</a>
                                 </div>
                        </form>
                    </div>
               </div>
           </div>
      </div>
</body>
</html>