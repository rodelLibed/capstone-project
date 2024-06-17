<?php 
include('authentication.php');

if(isset($_POST['delete'])){
        $user_id = $_POST['delete'];
        $query = "DELETE FROM t_users WHERE id='$user_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['message']="Delete Successfully";
            header("Location: view-register");
            exit(0);
        }else{
            $_SESSION['message']="Something Went Wrong";
            header("Location: view-register");
            exit(0);
        }
    
    


}

if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $ln = $_POST['ln'];
    $email_address = $_POST['email_address'];
    $password= $_POST['password'];
    $role_as =  $_POST['role_as'];
   

    $query ="UPDATE t_users SET fn'$fn',mn'$mn',ln'$ln',email_address'$email_address',password'$password',
    role_as'$role_as' WHERE id='$user_id'";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message']="Upadate Successfully";
        @header("Location: view-register");

    }




}

?>