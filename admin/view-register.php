<?php 
   session_start();
   
   include('authentication.php');
   include('includes/header.php');


?>

    <div class="container-fluid px-4">
      
       
           <div class="row">
              <div class="col-md-12">
                <?php include('message.php');?>
              <div class="card">
                   <div class="card-header">
                       <h4>Manage System Users</h4>
                   </div>
                    <div class="card-body">
                         <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>USER DETAILS</th>
                                    <th>EMAIL</th>                                  
                                    <th>PASSWORD</th>
                                    <th>ROLES</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM t_users";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run )>0){
                                         foreach($query_run as $row)
                                         {
                                            ?>
                                             <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['fn']; ?></td>
                                                <td><?= $row['email_address']; ?></td>
                                                <td><?= $row['password']; ?></td>
                                                
                                                 <td>
                                                     <?php
                                                        if($row['role_as']=='1'){
                                                              echo "Admin";
                                                        }elseif($row['role_as']=='0'){
                                                            echo "Users";
                                                        }
                                                     ?>
                                                 </td>
                                               <td><a href="register-edit?id=<?=$row['id'];?>" class="btn btn-success">Edit</a></td>
                                            
                                                <td>
                                               <form action="code" method="POST"></form>
                                                <button type="submit" name="delete"class="btn btn-danger" value="<?= $row['id'];?>">Delete</button>
                                               </td>
                                               
                                             
                                                
                                            </tr>
                                            <?php
                                         }
                                    }
                                    else
                                    {
                                    ?>
                                      <tr>
                                        <td collapse="6">No Record Found</td>
                                      </tr>
                                   <?php
                                    }
                                    ?>
                                
                                
                            </tbody>
                             
                         </table>
                    </div>
               </div>
              </div>
           </div>
           
    </div>

<?php 
   
   include("includes/footer.php");
   

?>