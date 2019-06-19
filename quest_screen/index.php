<?php 
session_start();
include("../admin_panel/connect.php");
if(isset($_POST['ok_code'])){
	$sql_cari_code = "SELECT * FROM tb_quest WHERE UniqueCode = '$_POST[quest_code]'";
	$result = mysqli_query($con, $sql_cari_code);
	if(mysqli_num_rows($result)==0){
		echo "<script >alert('CODE NOT FOUND! Contact Administrator')</script>";
		echo "<script>document.location.href='index.php'</script>";
	}else{
		echo "<script>document.location.href='index.php?code=$_POST[quest_code]'</script>";
	}
}

if(isset($_POST['submit_login_team'])){
	$password_group = $_POST['password_group'];
	$username_group = $_POST['username_group'];

	$sql_cari_grup = "SELECT * FROM tb_group WHERE Password = '$password_group' AND GroupUsername = '$username_group'";
	
	$result_cari_group = mysqli_query($con, $sql_cari_grup);
	if(mysqli_num_rows($result_cari_group)==0){
		echo "<script >alert('Your Group username and password combination not found')</script>";
		echo "<script>document.location.href='index.php?code=$_GET[code]'</script>";
	}else{

		$sql_cari_quest = "SELECT tb_pathway.*, tb_group.Password as GroupPassword, tb_group.GroupUsername, tb_quest.IdQuest, tb_quest.UniqueCode FROM tb_pathway JOIN tb_group ON tb_group.IdGroup = tb_pathway.GroupId JOIN tb_quest ON tb_quest.IdQuest = tb_pathway.QuestIdCurrent WHERE GroupUsername = '$username_group'";
		$result = mysqli_query($con, $sql_cari_quest);
		$data_question = mysqli_fetch_array($result);
		if(mysqli_num_rows($result)==0){
			echo "<script >alert('Your Group is not listed in this Question Spot')</script>";
			echo "<script>document.location.href='index.php?code=$_GET[code]'</script>";
		}else{
			$_SESSION['quest_password'] = 'TRUE';
			echo "<script>document.location.href='index.php?code=$_GET[code]&question_true=$data_question[IdQuest]'</script>";
		}

	}
}

if(isset($_GET['question_true'])){
	$sql_question_tampil = "SELECT * FROM tb_quest WHERE IdQuest  = '$_GET[question_true]'";
	$query_question_tampil = mysqli_query($con, $sql_question_tampil);
	$result_question_tampil = mysqli_fetch_array($query_question_tampil);
}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- AnimaCSS -->

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<style type="text/css">
	html,body {
		height: 100%;
		font-family: 'Ubuntu', sans-serif;
	}
</style>

<title>Question Screen</title>
</head>
<body>
	<div class="container-fluid" style="margin-top: 10vh">
		<div class="row align-items-center">
			<div class="col-md-10 offset-md-1 h-100 col-sm-12  animated bounce" >
				<center><img src="../assets/logo.png" alt="" style="height: 100px;"> <br> NAMA EVENT DISINI <br><br></center>
			</div>
		</div>

		<div id="body-content-quest" style="display: none;">
			<form method="post" enctype="multipart/form-data">
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<h2><?php echo $result_question_tampil['Clue']; ?></h2>
					</div>
				</div>
				<br>
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<input type="text" class="form-control" name="evidence">
						<br>
						<input type="submit" class="btn btn-info" name="simpan_evidence">							
					</div>
				</div>
			</form>
		</div>

		<div id="body-content-code-entry" style="display: none;">
			<form method="post">
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<h2>Enter Quest Code</h2>
					</div>
				</div>
				<br>
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<input type="text" class="form-control" name="quest_code">
						<br>
						<input type="submit" class="btn btn-success" value="OK" name="ok_code">
					</div>
				</div>
			</form>
		</div>

		<div id="body-content-password-entry" style="display: none;">
			<form method="post">
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<h2>Enter The group username</h2>
					</div>
				</div>
				<br>
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<input type="text" class="form-control" name="username_group">
					</div>
				</div>
				<br>
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<h2>Enter The group password</h2>
					</div>
				</div>
				<br>
				<div class="row align-items-center">
					<div class="col-md-10 offset-md-1 h-100 col-sm-12   " >
						<input type="password" class="form-control" name="password_group">
						<br>
						<input type="submit" class="btn btn-success" value="LOGIN" name="submit_login_team">
					</div>
				</div>
			</form>
		</div>


	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<?php
	if(empty($_GET['code'])){
		?>
		<style>
		#body-content-code-entry{
			display: block !important;
		}
	</style>
	<?php
}else if(empty($_SESSION['quest_password']) || empty($_GET['question_true'])){

	?>
	<style>
	#body-content-password-entry{
		display: block !important;
	}
</style>
<?php
}else{
	?>
	<style>
	#body-content-quest{
		display: block !important;
	}
</style>
<?php 
}	
?>
</body>
</html>