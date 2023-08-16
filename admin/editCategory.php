<?php include '../config.php';
 
if(isset($_POST["submit"]))
{





$id= $_GET['id'];
		
$title= $_POST['title'];
		
		
	$sql="UPDATE `categories` SET `title`='$title' where  `cat_id`='$id'";
		
		
		
		
		
	
	$insert = $con->query($sql); 
             if($insert){ 
                $status = 'success'; 
                echo $statusMsg = "Record is updates successfully."; 
            }else{ 
               echo $statusMsg = "Failed, please try again."; 
            }  
	
	
	
	
}


$id= $_GET['id'];
$title="";
$result = $con->query("SELECT * FROM `categories` where  `cat_id`='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
			
     //   `fullname`, `userid`,  `address`, `mobile`, `phone`
			
			
	


     
		
	    $title= $row['title'];
		
		// $fullname,$userid,	 $address, $mobile, $phone
		
		
}
}




?>
 
<?php include("header.php")?>
<br><br><br><br>
<center>
<h1>
Edit Category Details!
</h1>
<br>
<form action="editCategory.php?id=<?php echo $id; ?>" method="post">
<table>


<tr><td>Category ID</td><td><?php echo $id; ?></td></tr>
<tr><td>Title</td><td><input type="Text" name="title" value="<?php echo $title; ?>"></td></tr>



</td></tr>
<tr><td></td><td><input class="button1" type="submit" name="submit" value="Save Changes"></td></tr>


</table>
</form>
</center>
