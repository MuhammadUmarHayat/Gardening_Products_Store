<?php include '../config.php';
 
if(isset($_POST["submit"]))
{





$id= $_GET['id'];
	//plant_id,`title`,  `category`, `purchasing_price`, `sale_price`, `quantity`	
$title= $_POST['title'];
$category=$_POST['category'];
$purchasing_price=$_POST['purchasing_price'];
$sale_price=$_POST['sale_price'];
$quantity=$_POST['quantity'];
		
	$sql="UPDATE `plants_table` SET `title`='$title',`category`='$category',`purchasing_price`='$purchasing_price',`sale_price`='$sale_price',`quantity`='$quantity' where  `plant_id`='$id'";
	
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
$category="";
$purchasing_price=0;
$sale_price=0;
$quantity=0;

$result = $con->query("SELECT * FROM `plants_table` where  `plant_id`='$id'"); 
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
			
     
		//title,category,purchasing_price,sale_price,quantity	
		


     
		
	    $title= $row['title'];
        $category= $row['category'];
        $purchasing_price= $row['purchasing_price'];
        $sale_price= $row['sale_price'];
        $quantity= $row['quantity'];
		
		
		
		
}
}




?>
 <?php include("header.php")?>
<br><br><br><br>
<center>
<h1>
Edit Product Details!
</h1>
<br>
<form action="editproduct.php?id=<?php echo $id; ?>" method="post">
<table>


<tr><td>Plant ID</td><td><?php echo $id; ?></td></tr>
<tr><td>Title</td><td><input type="Text" name="title" value="<?php echo $title; ?>"></td></tr>

<tr><td>Category</td><td><input type="Text" name="category" value="<?php echo $category; ?>"></td></tr>
<tr><td>Purchasing price</td><td><input type="number" name="purchasing_price" value="<?php echo $purchasing_price; ?>"></td></tr>
<tr><td>Sale price</td><td><input type="number" name="sale_price" value="<?php echo $sale_price; ?>"></td></tr>
<tr><td>Quantity</td><td><input type="number" name="quantity" value="<?php echo $quantity; ?>"></td></tr>

</td></tr>
<tr><td></td><td><input class="button1" type="submit" name="submit" value="Save Changes"></td></tr>


</table>
</form>
</center>
</body>
</html>
   