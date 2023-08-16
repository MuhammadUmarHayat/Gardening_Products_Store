<?php include '../config.php';
 
if(isset($_POST["submit"]))
{



//// $fullname,$userid,	 $address, $mobile, $phone

$userid= $_GET['id'];
		
$fullname= $_POST['fullname'];
		$address= $_POST['address'];
		 $mobile=$_POST['mobile'];
		 $phone= $_POST['phone'];
		

		
	$sql="UPDATE `users` SET `fullname`='$fullname',`address`='$address',`mobile`='$mobile',`phone`='$phone' where userid='$userid'";
		
		
		
		
		
	
	$insert = $con->query($sql); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Record is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  
	
	
	
	
}


$id= $_GET['id'];

$result = $con->query("SELECT * FROM `users` where userid='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
			
     //   `fullname`, `userid`,  `address`, `mobile`, `phone`
			
			
	


     
		
	    $fullname= $row['fullname'];
		$userid= $row['userid'];
		 $address=$row['address'];
		 $mobile= $row['mobile'];
		 $phone= $row['phone'];
		   
		// $fullname,$userid,	 $address, $mobile, $phone
		
		
}
}




?>
 
<center>
<h1>
Edit User Details!
</h1>
<br>
<form action="editUser.php?id=<?php echo $userid; ?>" method="post">
<table>


<tr><td>User ID</td><td><?php echo $userid; ?></td></tr>
<tr><td>fullname</td><td><input type="Text" name="fullname" value="<?php echo $fullname; ?>"></td></tr>
<tr><td>Address</td><td><input type="Text" name="address" value="<?php echo $address; ?>"></td></tr>
<tr><td>Mobile</td><td><input type="Text" name="mobile" value="<?php echo $mobile; ?>"></td></tr>
<tr><td>Phone</td><td><input type="Text" name="phone" value="<?php echo $phone; ?>"></td></tr>


	


</td></tr>
<tr><td></td><td><input class="btn-success" type="submit" name="submit" value="Save Changes"></td></tr>


</table>
</form>
</center>
</body>
</html>
   