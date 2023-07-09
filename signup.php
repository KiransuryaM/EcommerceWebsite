<?php
include('connectdb.php');
$name = $_POST['name'];
$email = $_POST['mail'];
$contact = $_POST['contact'];
$password = $_POST['psw'];

$insert = "insert into user values('$name','$email','$contact','$password')";
$res = mysqli_query($con,$insert)
or
die("Error inserting data into the table");

$checkusr = "select email from user where email='$email'";
$res = mysqli_query($con,$checkusr)
or
die("Error in fetching data");

$count = mysqli_num_rows($res);
if($count==1)
{
    echo "<script>
    alert ('Signed up successfully');
    window.location.href='login.html';
    </script>";
    /*echo "<h1>Register Details</h1>";
    echo "Welcome ".$_REQUEST['name'].".<br />";
    echo "Your mail ID is ".$_REQUEST['mail'].".<br />";
    echo "Contact Number is ".$_REQUEST['contact'].".<br />";
    echo "Password is ".$_REQUEST['psw'].".<br />";
    echo "<h1><b>You have registered with these details Successfully</b></h1>";*/
}
else
{
    echo "<h1><b>Already registered with this email ID</b></h1><br>";
    echo "<h1><b>Enter new mail ID</b></h1>";
}
?>
