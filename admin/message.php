<?php

    if(isset($_SESSION['message']))
    {
    ?>
       
       <div class="alert " role="alert" style="text-align: center; background-color:#DC3535;">
           <strong>Hey!</strong> <?= $_SESSION['message'];?> 
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     <?php
     unset($_SESSION['message']);
       
    }
?>