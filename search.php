
<?php include 'config.php';
 $result;
 
if(isset($_POST['search']))
{
    echo "cliked";
   $title=$_POST['title'];
    $category=$_POST['title'];
  
   
 $query = "SELECT * FROM `plants_table` where `category`='$category' or `title`='$category'";
    $result =$con->query($query);
   
   
}
else
{
// Get all data from database 
 $result = $con->query("SELECT * FROM `plants_table`");
 
}

?>
<!-- php script  -->
<?php


?>



		<?php  include("header.php")?>
        <!-- header close -->
        
       
        <header>
        
</header>

    
    <!-- boxes start -->
    <section >
    

<style>
     .button1{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  } .button2{
    background-color: #008CBA; /* Blue */
    border: none;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  </style>
  <br><br><br><br>
 <div class="center">

 <br><br>
   <div class="cneter">
        <form action="search.php" method="post">
            <input  type="text" name="title" size="65px" style="font-size:16px;" placeholder="Search...">
            <button class="button2" type="submit" value="search" name="search">Search</button>
            </form>
        </div>
        <br><br>


</div><br><br><br><br><br>
 <section class="flex-property">

<?php  if ($result->num_rows > 0) 
{
     while ($row = $result->fetch_assoc())
      {
    ?>
    
    <div class="border1">
        
        

        <h5 class="plant-text"><?php echo $row['title'] ?></h5>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['photo']); ?>" width=20% />

  <p class="price"><?php echo $row['sale_price'] ?></p>
 <p> <h4><?php echo $row['description'] ?></h4></p>
  <p><a class="button1" href="login.php" class="info">View </a></p>

  </div>
     
    <?php



} ?>

<?php } ?>

    </section>  


