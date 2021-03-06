<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
// else{
	
	
	// if(isset($_POST['submit']))
	// {	
		// $lname=$_POST['name'];
		// $email=$_POST['email'];
		// $mobileno=$_POST['mobile'];
		// $password=$_POST['designation'];
		// $idedit=$_POST['editid'];
		
		// $sql="UPDATE users SET name=(:name), email=(:email), mobile=(:mobileno), designation=(:designation), Image=(:image) WHERE id=(:idedit)";
		// $query = $dbh->prepare($sql);
		// $query-> bindParam(':name', $name, PDO::PARAM_STR);
		// $query-> bindParam(':email', $email, PDO::PARAM_STR);
		// $query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
		// $query-> bindParam(':designation', $designation, PDO::PARAM_STR);
		// $query-> bindParam(':image', $image, PDO::PARAM_STR);
		// $query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
		// $query->execute();
		// $msg="Information Updated Successfully";
// }    
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title> Profile list</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<script type= "text/javascript" src="../vendor/countries.js"></script>
	<style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
#table-1 thead, #table-1 tr {
border-top-width: 1px;
border-top-style: solid;
border-top-color: rgb(230, 189, 189);
}
#table-1 {
border-bottom-width: 1px;
border-bottom-style: solid;
border-bottom-color: rgb(230, 189, 189);
}

/* Padding and font style */
#table-1 td, #table-1 th {
padding: 5px 10px;
font-size: 12px;
font-family: Verdana;
color: rgb(177, 106, 104);
}

/* Alternating background colors */
#table-1 tr:nth-child(even) {
background: rgb(238, 211, 210)
}
#table-1 tr:nth-child(odd) {
background: #FFF
}
		</style>


</head>

<body>
<?php
		$email = $_SESSION['alogin'];
		$sql = "SELECT * from user where authority = 'Professor';";
		$query = $dbh -> prepare($sql);
		
		$query->execute();
		$result=$query->fetchall(PDO::FETCH_OBJ);
		$cnt=1;	
		

?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<?php if($role =='Admin'){
									?>
								<a href="Professor_add.php">new Professor</a>
							<?php }?>
								
	<table class="table table-striped" style="width:100%">
	<thead>
		<th style="width:15%">user_id</th>
		<th style="width:15%">first_name</th>
		<th style="width:15%">last_name</th>
		<th style="width:15%">email</th>
		<th style="width:30%">address</th>
		<th style="width:10%">operation</th>
	</thead>
	<?php foreach($result as $v):?>
	<tr>
		
			
		<td><?php echo $v->user_id?></td>
		<td><?php echo $v->first_name?></td>
		<td><?php echo $v->last_name?></td>
		<td><?php echo $v->email?></td>
		<td><?php echo $v->address?></td>
		<?php 
				$role = $_SESSION['role'];
				if($role !='Student'){
									?>
		<td><a href="professor_edit.php?id=<?php echo $v->user_id?>">edit</a> |<a href="doprofessordelete.php?id=<?php echo $v->user_id?>">delete</a></td>
							<?php }?>
		
	
	</tr>
	<?php endforeach?>
</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>
</body>
</html>
