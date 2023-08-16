<?php
session_start();
$userid=  $_SESSION['userid'] ;
if(!isset($userid))
{
    header('Location:'.'logout.php');
}
else
{
     $userid;
}

?>
 <?php  include("header.php")?>
    <h1>
        Admin Pannel <?php echo  $userid;?>
    </h1>
      


</body>
</html>