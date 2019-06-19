<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
<?php  
  if(isset($_POST["insert_user"])){
    $user_insert = mysqli_query($con,"INSERT INTO `tb_user`(`IdUser`, `NamaUser`, `Phone`, `Email`, `Gender`) VALUES (NULL,'$_POST[NamaUser]','$_POST[Phone]','$_POST[Email]','$_POST[Gender]')");
    if($user_insert){
      echo"<script>alert('successfully insert data')</script>";
      echo"<script>document.location.href='index.php?menu=user'</script>";
    }else{
      echo"<script>alert('failed insert data')</script>";
      echo"<script>document.location.href='index.php?menu=insert_user'</script>";

    }
  }
  if(isset($_POST['update_user'])){

  	$IdUser = $_POST['IdUser'];
  	$nama = $_POST['NamaUser'];
  	$nomor = $_POST['Phone'];
  	$email = $_POST['Email'];
  	$kelamin = $_POST['Gender'];
    $user_update = mysqli_query($con,"UPDATE `tb_user` SET `NamaUser`= '$nama',`Phone`= '$nomor',`Email`= '$email',`Gender`='$kelamin' WHERE IdUser = '$IdUser' ");
    if($user_update){	
      echo"<script>alert('successfully update data')</script>";
      echo"<script>document.location.href='index.php?menu=user'</script>";
    }else{
      echo"<script>alert('failed update data')</script>";
      echo"<script>document.location.href='index.php?menu=insert_user'</script>";

    }
  }

  $user_edit = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM tb_user WHERE IdUser ='$_GET[edit]'"));
?>
  <body>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Form Insert User</div>
        <div class="card-body">
          <form method="post">
            <!-- <div class="form-group"> -->
              <!-- <div class="form-row"> -->
              	<input type="hidden" name="IdUser" id="IdUser" class="form-control" placeholder="Id User" required="required" autofocus="autofocus" value="<?php echo $user_edit['IdUser']?>">

                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="NamaUser" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus" value="<?php echo $user_edit['NamaUser']?>">
                    <label for="firstName">Name</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="number" name="Phone" id="lastName" class="form-control" placeholder="Last name" required="required" value="<?php echo $user_edit['Phone']?>">
                    <label for="lastName">Phone</label>
                  </div>
                </div>
              <!-- </div> -->
            <!-- </div> -->
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="Email" id="inputEmail" class="form-control" placeholder="Email address" required="required" value="<?php echo $user_edit['Email'] ?>">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
                <!-- <div class="form-group"> -->
                  <!-- <div class="form-label-group"> -->
                <label>Gender</label>
                    <select class="form-control" name="Gender">
                      <option value=""><?php echo $user_edit['Gender'] ?></option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <br>
                  <!-- </div> -->
                <!-- </div> -->
              
            <!-- <a class="btn btn-primary btn-block" href="">Submit</a> -->
            <?php if($_GET['edit']){ ?>
            <input type="submit" class="btn btn-primary btn-block" name="update_user" value="UPDATE">
            <a href="index.php?menu=user" class="btn btn-danger btn-block">CANCEL</a>
            <?php }else{ ?>
            <input type="submit" class="btn btn-primary btn-block" name="insert_user" value="SAVE">
            <a href="index.php?menu=user" class="btn btn-danger btn-block">CANCEL</a>
        	<?php } ?>
          <div class="text-center">
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 05:08:49 GMT -->
</html>
