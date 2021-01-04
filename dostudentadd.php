<?php
session_start();
error_reporting(0);
include('includes/config.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uid=$_POST['id'];
$email=$_POST['email'];
$address=$_POST['address'];
$p=$_POST['password'];
$a='Student';
$sql="UPDATE user SET first_name=(:name), last_name=(:lname), address=(:address) WHERE user_id=(:idedit)";
$sql="insert into user(user_id,first_name,last_name,email,address,password,authority) values(:idedit,:name,:lname,:email,:address,:p,:a)";
$query = $dbh->prepare($sql);
$query-> bindParam(':name', $fname, PDO::PARAM_STR);
$query-> bindParam(':lname', $lname, PDO::PARAM_STR);
$query-> bindParam(':address', $address, PDO::PARAM_STR);
$query-> bindParam(':idedit', $uid, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':p', $p, PDO::PARAM_STR);
$query-> bindParam(':a', $a, PDO::PARAM_STR);
$res=$query->execute();
if($res){
	  echo "<script>alert('success');location.href='students_list.php'</script>";die;
}		
  
?>


