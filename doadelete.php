<?php
session_start();
error_reporting(0);
include('includes/config.php');

$uid=$_GET['id'];

$sql="delete from achievement where id=(:idedit)";
$query = $dbh->prepare($sql);

$query-> bindParam(':idedit', $uid, PDO::PARAM_STR);
$res=$query->execute();
if($res){
	  echo "<script>alert('success');location.href='achievement_list.php'</script>";die;
}		
  
?>


