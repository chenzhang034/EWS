<?php
session_start();
error_reporting(0);
include('includes/config.php');
$id=$_POST['id'];
$target=$_POST['target'];
$sql="UPDATE user_target SET target=(:ctitle) WHERE id=(:cid)";
$query = $dbh->prepare($sql);
$query-> bindParam(':cid', $id, PDO::PARAM_STR);
$query-> bindParam(':ctitle', $target, PDO::PARAM_STR);
$res=$query->execute();
if($res){
	  echo "<script>alert('success');location.href='target_list.php'</script>";die;
}		
  
?>


