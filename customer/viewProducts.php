<?php include '../config.php';?>

<?php
session_start();// start the session

if(isset($_POST['checkout']))
{
	header('Location:'.'checkout.php');
}

$customerID=$_SESSION['userid'] ;
echo "<h1> Welcome : ".$customerID."</h1>";

 $productid=$_GET['id'];

$_SESSION["productid"] =$productid;
$productid=$_SESSION["productid"];

if(isset($_POST['done']))//add to cart
{
	
	$cusId = $customerID;
            $productid=$_POST['plant_id'];
			
 $result = $con->query("SELECT * FROM plants_table where plant_id= '$productid'"); 

 if($result->num_rows > 0)
 {
	 
	$row = $result->fetch_assoc();
	
$price = $row['sale_price'];
			
$qty=	$_POST['qty'];		
	$TotalPrice=$price*$qty;


                                              echo"<br> cusId ".$cusId." productid ".$productid." price ".$price." qty ".$qty." TotalPrice ".$TotalPrice;
	
			$status="added";
			
		$q1="INSERT INTO `plants_cart`( `plantid`, `customerid`, `unitprice`, `qty`, `total`, `remarks`) VALUES ('$productid','$cusId','$price','$qty','$TotalPrice','$status')";	
			$query = mysqli_query($con,$q1);
 	echo"thank you";
	
	header('Location:'.'index.php');
 }
	
	
	
	
	
	
}

include "header.php";

$result = $con->query("SELECT * FROM plants_table where plant_id= '$productid'"); 

 if($result->num_rows > 0)
 {
	$row = $result->fetch_assoc();
	
	
	

?>


   <form method="POST" action="ViewProducts.php">
   <?php 
   
   $unitPrice=$row['sale_price'];
	 $title=$row['title'];
	 $category=$row['category'];

   
   ?>
<table border=1>

<tr><td><a href="index.php">Home</a></td>
<td></td><td></td><td></td><td></td>
</tr>
<tr><th>Product NO</th><th>Name</th><th>category</th><th>price</th><th>Choose Quantity</th></tr>
<tr><td><?php echo $productid;  ?></td>
<td><?php echo $title;  ?></td>
<td><?php echo $category;  ?></td><td>
<?php echo $unitPrice;  ?></td><td> Quantity:
	   <select name ="qty" id="qty">  
  <option value="Select" >--Select--</option> 
  <option value="1">1</option>  
  <option value="2">2</option>  
  <option value="3">3</option>  
  <option value="4">4</option>  
  <option value="5">5</option>  
  <option value="6">6</option>  
  <option value="7">7</option>  
  <option value="8">8</option>  
  <option value="9">9</option>  
  <option value="10">10</option>
</select>
<input type="hidden" id="plant_id" name="plant_id" value="<?php echo $row['plant_id']?>">
</td></tr>
<tr><td></td><td><button class="button1" type="submit" name="done" >Add to Cart </button></td><td><button class="button2" type="submit" name="checkout"> check out </button> </td><td></td></tr>

</table>

 	 
<?php		
 }

?>

                    
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>