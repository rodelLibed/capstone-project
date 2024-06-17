<?php 
session_start();
include("admin/config/conn.php");
if(isset($_POST['submit'])){
    if(mysqli_query($conn, "UPDATE t_users SET password='$_POST[password]' WHERE email_address='$_POST[email_address]'"))
    {
        header("Location:  password_reset");
        $_SESSION['message'] = "Password Successfully Updated";


    }else{
        header("Location: password_reset");
        $_SESSION['message'] = "Failed to Update";
    }
}

?>