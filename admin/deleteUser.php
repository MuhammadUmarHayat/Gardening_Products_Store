<?php include '../config.php';
 
$id= $_GET['id'];//query string 
$statusMsg ="";

$insert = $con->query("Delete from `users` where `userid`='$id'"); 
             if($insert){ 
               
                 $statusMsg = "Record is deleted successfully."; 
            }else{ 
                $statusMsg = "Failed, please try again."; 
            }  

?>

 
<h3>
<?php echo $statusMsg; ?>

</h3>
<br>
</body>
</html>
   