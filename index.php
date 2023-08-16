

<?php
if(isset($_POST['submit']))
{
     header('Location:'.'login.php');
}
include("header.php");?>
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
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  </style>
<!-- Black background line -->
<div class="Bg-color"></div>

<!-- Main image section -->
<main class="Bg-color-2">

    <div class="Text">

    <h4 class="welcome">WELCOME</h4>
    <h4 class="online">YOUR ONLINE PLANTS NURSERY</h4>
    <p class="Household">Household plants not only enhance the overall appearance of a space but studies show they boost moods, increase creativity reduce stress and eliminate air pollutants-making for a healthier, happier you. Being able to see the greenery of plants around you has a calming effect, towering blood pressure and consequently making you feel more relaxed and ultimately, happier</p>
    <div class="button-1">
        <button class="button" id="demo" ><b><a href="aboutUs.php" class="info">MORE INFO</a></b></button>
        <button class="button" id="demo2" ><b><a href="contactus.php" class="info">CONTACT US</a></b></button>
    </div>

    </div>

    <div>
        <img src="assets/images/p1.jpeg"  class="main-image" alt="">
    </div>

</main>


<!-- New section Cateogor -->
<section class="flex-property">
    <div class="border">
        <h5 class="plant-text">Plants</h5>
        <img src="assets/images/plant.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
      
        <a class="button2" href="plantList.php" class="info">View </a>
    </div>
    <div class="border">
        <h5 class="plant-text">Pots</h5>
        <img src="assets/images/pots.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <a class="button2" href="PotsList.php" class="info">View </a>

        </div>
    <div class="border">
        <h5 class="plant-text">Gardening Tools</h5>
        <img src="assets/images/tools.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <a class="button2" href="tools.php" class="info">View </a>

     </div>
    
</section>
<form action="index.php">
<div class="center">
<h2> Popular Products</h3>

</div> 
<br><br><br><br><br><br>
<section class="flex-property">

      
    <div class="border">
        <h5 class="plant-text">Guldans</h5>
        <img src="assets/images/deal-img.jpg" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Seasonal Flowers</h5>
        <img src="assets/images/coneflower.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Seeds</h5>
        <img src="assets/images/seed.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    
</section>

<div class="center">
<h2> Flowers</h3>
</div> 
<br><br><br><br><br><br>
<section class="flex-property">

      
    <div class="border">
        <h5 class="plant-text">Winter Flowers</h5>
        <img src="assets/images/petunia.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Rose</h5>
        <img src="assets/images/rose.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Summer Flowers</h5>
        <img src="assets/images/coneflower.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    
</section>
<div class="center">
<h2> Pots</h3>
</div> 
<br><br><br><br><br><br>
<section class="flex-property">

      
    <div class="border">
        <h5 class="plant-text">Plants</h5>
        <img src="assets/images/plant.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Pots</h5>
        <img src="assets/images/pots.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    <div class="border">
        <h5 class="plant-text">Gardening Tools</h5>
        <img src="assets/images/tools.png" class="plants-images" alt="">
        <p>ipsum dolor sit amet. consectetur<br>adipiscing elit sed d veniam adipiscing<br>elit sed d veniam</p>
        <button class="button1" type="submit" name="submit" >Add to Cart<button>
    </div>
    
</section>


</form>
</body>
</html>