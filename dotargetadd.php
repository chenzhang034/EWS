<?php
session_start();
error_reporting(0);
include('includes/config.php');
$cid=$_POST['cid'];
$target=$_POST['target'];
if(empty($cid)){
	echo "<script>alert('course_id is not null');location.href='target_list.php'</script>";die;
}
$uid = $_SESSION['alogin'];
$sql="insert into user_target(course_id,target,user_id) values(:cid,:ctitle,:ctp)";
$query = $dbh->prepare($sql);
$query-> bindParam(':cid', $cid, PDO::PARAM_STR);
$query-> bindParam(':ctitle', $target, PDO::PARAM_STR);
$query-> bindParam(':ctp', $uid, PDO::PARAM_STR);
$res=$query->execute();

if($res){
	  echo "<script>alert('success');location.href='target_list.php'</script>";die;
}		
  
?>


