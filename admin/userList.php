<?php
include '../config.php';
$result = $con->query("SELECT  `fullname`, `userid`,  `address`, `mobile`, `phone` FROM users "); 
?>

//GUI
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
</head>
<body>
    <div>
    <?php
if($result->num_rows > 0)
 { 
  while($row = $result->fetch_assoc())
		{
//`fullname`, `userid`,  `address`, `mobile`, `phone`
            ?>
          Full Name:  <?php echo $row['fullname']?>
          <br>
          User ID:  <?php echo $row['userid']?>
          <br>
          Address:  <?php echo $row['address']?>
          <br>
          Mobile:  <?php echo $row['mobile']?>
          <br>
         
          <?php  echo '<a   href="editUser.php?id=' . $row['userid'] .'">Edit Details</a>'; echo"|";
	echo '<a   href="deleteUser.php?id=' . $row['userid'] .'">Delete User</a>';
echo '<br>';?>
 <hr>
          <?php
          }

		}
		else{
			
			echo "No record is found!";
		}?>
</div>
</body>
</html>