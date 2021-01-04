<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('mail.php');
$s=new QQMailer;
$cid=$_POST['cid'];
$uid=$_POST['uid'];
$a=$_POST['a'];
$b=$_POST['b'];
$time=$_POST['time'];
$date=date('Y-m');
$sql="select * from achievement where course ='{$cid}' and user_id='{$uid}' and time='{$time}' and date = '{$date}'";
$query = $dbh->prepare($sql);
$query->execute();
$res=$query->fetchall(PDO::FETCH_OBJ);
if(empty($res)){
$as="insert into achievement(user_id,course,achievement,assignment,time,date) values('{$uid}','{$cid}','{$a}',{$b},'{$time}','{$date}')";
$query = $dbh->prepare($as);
$query->execute();
$sc="select count(course_id) as cd from course";
$sa="select count(id) as cd,sum(achievement) as sm from achievement where user_id='{$uid}' and  date = '{$date}'";
$query = $dbh->prepare($sc);
$query->execute();
$resc=$query->fetch(PDO::FETCH_OBJ);
$query = $dbh->prepare($sa);
$query->execute();
$resa=$query->fetch(PDO::FETCH_OBJ);

if($resc->cd == $resa->cd){
	$sqs="select sum(target) as st from user_target where user_id = {$uid}";
	$query = $dbh->prepare($sqs);
	$query->execute();
	$ress=$query->fetch(PDO::FETCH_OBJ);
	if($ress->st>$resa->sm){
		
		  $s->send($_SESSION['em'],'remind','remind');
		  echo "<script>alert('success');location.href='achievement_list.php'</script>";die;
	}
}

 echo "<script>alert('success');location.href='achievement_list.php'</script>";die;
}else{
	echo "<script>alert('date is alreadly');location.href='achievement_list.php'</script>";die;
}

/*$sql="insert into course(course_id,course_title,course_type) values(:cid,:ctitle,:ctp)";*/
if($res){
	  echo "<script>alert('success');location.href='achievement_list.php'</script>";die;
}		
  
?>


