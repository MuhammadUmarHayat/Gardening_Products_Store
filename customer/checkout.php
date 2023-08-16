<?php include '../config.php'; 

session_start();
$customerID="";
$customerID=$_SESSION['userid'] ;
echo "<h1> Welcome : ".$customerID."</h1>";

if(isset($_POST['order']))
{
	header('Location:'.'CustomerPayments.php');
}
include "header.php";
?>






<div >

                <form method="POST" action="checkout.php">
				<br>
<br> 
<br>
<table border=1>
<tr><th>ID</th><th>customerID</th><th>Product Number</th><th>unitPrice</th><th>Quantity</th><th>TotalPrice</th></tr>
<?php
// Get image data from database 
$result = $con->query("SELECT * FROM `plants_cart` WHERE customerid='$customerID'"); 
 if($result->num_rows > 0)
 { 
 while($row = $result->fetch_assoc()){
  	 
	echo"<tr><td>".$row['id']."</td><td>".$row['customerid']."</td><td>".$row['plantid']."</td><td>".$row['unitprice']."</td><td>".$row['qty']."</td><td>".$row['total']."</td></tr>";
	     
 }
 }
 else{
	 
	 
	  echo "No orders are found!";
 }
 
 
 //////////////////////////
 $result = mysqli_query($con, 'SELECT SUM(`total`) AS value_sum FROM plants_cart'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
echo "<br> <h2>Total Amount : ".$sum."</h2>";
 ?>
<br>
                    <button class="button2" type="submit" name="order">Place Order</button>
                </form>
            </div>
        </div>
    </main>
</div>
