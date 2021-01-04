<?php
session_start();
error_reporting(0);
include('includes/config.php');
$cid=$_POST['cid'];
$ctitle=$_POST['ctitle'];
$ctp=$_POST['ctp'];
$sql="insert into course(course_id,course_title,course_type) values(:cid,:ctitle,:ctp)";
$query = $dbh->prepare($sql);
$query-> bindParam(':cid', $cid, PDO::PARAM_STR);
$query-> bindParam(':ctitle', $ctitle, PDO::PARAM_STR);
$query-> bindParam(':ctp', $ctp, PDO::PARAM_STR);
$res=$query->execute();
if($res){
	  echo "<script>alert('success');location.href='course_list.php'</script>";die;
}		
  
?>


