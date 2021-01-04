<?php
session_start();
error_reporting(0);
include('includes/config.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uid=$_POST['id'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql="UPDATE user SET first_name=(:name), last_name=(:lname),email=(:email),address=(:address) WHERE user_id=(:idedit)";
$query = $dbh->prepare($sql);
$query-> bindParam(':name', $fname, PDO::PARAM_STR);
$query-> bindParam(':lname', $lname, PDO::PARAM_STR);
$query-> bindParam(':address', $address, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':idedit', $uid, PDO::PARAM_STR);
$res=$query->execute();
if($res){
	  echo "<script>alert('success');location.href='students_list.php'</script>";die;
}		
  
?>


