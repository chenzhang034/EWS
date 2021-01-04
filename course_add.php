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
	
	<title>course edit</title>

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
		</style>


</head>

<body>

	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">course_add</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data" action="docourseadd">



<div class="form-group">
	<label class="col-sm-2 control-label">course_id</label>
	<div class="col-sm-4">
	<input type="text" name="cid" class="form-control" required value="">
	</div>
	<label class="col-sm-2 control-label">course_title</label>
	<div class="col-sm-4">
	<input type="text" name="ctitle" class="form-control" required value="">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">course_type<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<input type="text" name="ctp" class="form-control" required value="" >
	</div>
</div>


<input type="submit" value="submit">
<div class="form-group">
	
</div>

</form>
									</div>
								</div>
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
