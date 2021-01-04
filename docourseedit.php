<?php
session_start();
error_reporting(0);
include('includes/config.php');
$cid=$_POST['cid'];
$ctitle=$_POST['ctitle'];
$ctp=$_POST['ctp'];
$sql="UPDATE course SET course_title=(:ctitle), course_type=(:ctp) WHERE course_id=(:cid)";
$query = $dbh->prepare($sql);
$query-> bindParam(':cid', $cid, PDO::PARAM_STR);
$query-> bindParam(':ctitle', $ctitle, PDO::PARAM_STR);
$query-> bindParam(':ctp', $ctp, PDO::PARAM_STR);
$res=$query->execute();
if($res){
	  echo "<script>alert('success');location.href='course_list.php'</script>";die;
}		
  
?>


