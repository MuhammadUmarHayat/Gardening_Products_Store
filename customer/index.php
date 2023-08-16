
<?php include '../config.php';

session_start();// start the session

$customerID=$_SESSION['userid'] ;

if(isset($_POST['buy']))
{
    $productid=$_POST['plant_id'];
    $_SESSION["productid"]= $productid;
    header('Location:'.'viewProducts.php?id='.$productid);
}

if(isset($_POST['checkout']))
{
	header('Location:'.'checkout.php');
}

$_SESSION["cartid"]="";
	$cartID="";
 
	$result = mysqli_query($con, 'SELECT SUM(`total`) AS value_sum FROM `plants_cart`'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
if(empty($sum))
{
$sum=0;
}

	



 $result;
 
if(isset($_POST['search']))
{
    echo "cliked";
   $title=$_POST['title'];
    $category=$_POST['title'];
  
   
 $query = "SELECT p.* FROM plants_table p LEFT JOIN plants_cart pc ON p.plant_id = pc.plantid WHERE pc.plantid IS NULL and `category`='$category' or `title`='$category'";
 
 
    $result =$con->query($query);
   // $result = $con->query("SELECT * FROM `plants_table`");
  // var_dump($result);
    // $result = $con->query("SELECT * FROM `plants_table` where `category`='$category' or `title`='$title'");
}
else
{
// Get all data from database 
$query = "SELECT p.* FROM plants_table p LEFT JOIN plants_cart pc ON p.plant_id = pc.plantid WHERE pc.plantid IS NULL";
 $result = $con->query($query);
 
}

?>
<!-- php script  -->
<?php


?>

		<?php  include("header.php")?>
        <!-- header close -->
        
       
        

        <br><br>
   <div class="cneter">
        <form action="index.php" method="post">
            <input  type="text" name="title" size="85px" style="font-size:16px;" placeholder="Search...">
            <button class="button2" type="submit" value="search" name="search">Search</button>
            </form>
        </div>
        <br><br>

    
    <!-- boxes start -->
    <section >
    <?php 
    echo "<h1> Welcome : ".$customerID."</h1>";
echo "<br> <h2> Total Amount : ".$sum."</h2>";


  if ($result->num_rows > 0) 
  {
     while ($row = $result->fetch_assoc())
      {
    ?>


    

     

<div class="border1">
        
<form action="index.php" method="post">      

        <h5 class="plant-text"><?php echo $row['title'] ?></h5>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width=20% />

  <p class="price"><?php echo $row['sale_price'] ?></p>
 <p> <h4><?php echo $row['description'] ?></h4></p>
 <input type="hidden" id="plant_id" name="plant_id" value="<?php echo $row['plant_id']?>">
 <p><button class="button1" id="buy" name="buy">Buy Now</button></p>

  </div>

  </form>
</div>





   
</div>

      </div>
     </section>
     <!-- boxes close -->

        

                            
                        <?php



                        } ?>

                    <?php } else { ?>
                        <p class="status error">Image(s) not found...</p>
                    <?php } ?>
                    

     
                </table> 
              
      </div>

    
    

 </body>
</html>


