
<!-- php scritp  -->

<!-- php scritp  -->

<?php
include '../config.php';
$message = "";

if (isset($_POST['submit'])) 
{
    
//userid,oldPw,newPw1,newPw2
    
          $userid = $_POST['userid'];
          $oldPw = $_POST['oldPw'];
          $newPw1 = $_POST['newPw1'];
          $newPw2 = $_POST['newPw2'];

if($newPw1==$newPw2)
{
    $result = $con->query("SELECT * FROM `users` WHERE `userid`='$userid' and `password`='$oldPw'");
    if ($result->num_rows > 0) 
    {// old password is correct
        //update the password
        $query = "UPDATE `users` SET `password`='$newPw1' WHERE `userid`='$userid' ";

        $update = mysqli_query($con, $query); 

        $message = "Password has been updated";
    }
    else
{

echo " Enter correct userid and password";
}

}
else
{

echo " New password dosenot match";
}
          

}
    





?>



<!-- GUI  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
<?php include("navbar.php")?>

<form method="post" action="changePassword.php" enctype="multipart/form-data">
                    <div class="center">
                        <table>

                            <tr>
                                <td>Enter User ID </td>
                                <td><input type="text" name="userid" required> <span class="error">*</span> </td>
                            </tr>
                            

                            <tr>
                                <td>Enter old password </td>
                                <td><input type="password" name="oldPw" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Enter new password</td>
                                <td><input type="password" name="newPw1" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td>Enter new password again</td>
                                <td><input type="password" name="newPw2" required> <span class="error">*</span> </td>
                            </tr> 
                            <tr>
                                <td> </td>
                                <td> <button type="submit" name="submit"> Submit </button> </td>
                            </tr>
                        </table>
                        <?php
                        echo $message;
                        ?>
                    </div>
                </form>


</body>
</html>