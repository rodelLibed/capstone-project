<?php 
   session_start();
   
   include('authentication.php');
   include('includes/header.php');


?>

    <div class="container-fluid px-4">
      
       
           <div class="row">
              <div class="col-md-12">
              <div class="card">
                   <div class="card-header">
                       <h4>Edit Users</h4>
                   </div>
                    <div class="card-body">

                    <?php 
                    if(isset($_GET['id'])){
                      $user_id = $_GET['id'];
                      $users = "SELECT * FROM t_users WHERE id='$user_id'";

                      $users_run = mysqli_query($conn, $users);

                      if(mysqli_num_rows($users_run)>0){


                        foreach($users_run as $user)
                        {
                        ?>

                     <form action="code" method="POST">
                      <input type="text" name="id"value="<?=$user['id'];?>">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">First Name</label>
                              <input type="text" name="fn" class="form-control" value="<?=$user['fn'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Middle Name</label>
                              <input type="text" name="mn" class="form-control" value="<?=$user['mn'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Last Name</label>
                              <input type="text" name="ln" class="form-control" value="<?=$user['ln'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Email Adress</label>
                              <input type="text" name="email_address" class="form-control" value="<?=$user['email_address'];?>">
                            </div>
                            <div class="col-md-6   mb-3">
                                <label for="">Password</label>
                              <input type="text" name="password" class="form-control" value="<?=$user['password'];?>">
                            </div>
                            <div class="col-md-6   mb-3">
                                <select name="role_as" id="">
                                  <option value="">Select Role</option>
                                  <option value="1"<?=$user['role_as']=='1'? 'selected':''?>>Admin</option>
                                  <option value="0"<?=$user['role_as']=='0'? 'selected': ''?>>User</option>

                                </select>
                            </div>
                          
                           
                            
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-primary" name="update">Update Users</button>
                            </div>
                        </div>
                     </form>

                     <?php 
                        }
                      }
                      else
                      {
                        ?>
                        <h4>No Records Found</h4>

                        <?php
                      }
                    }
                    
                    
                    ?>
                        
                    </div>
               </div>
              </div>
           </div>
           
    </div>

<?php 
   
   include("includes/footer.php");
   

?>