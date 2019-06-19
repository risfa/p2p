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
    if(isset($_POST['insert_questt'])){
      $quest_insert = mysqli_query($con,"INSERT INTO `tb_quest`(`IdQuest`, `NamaSpot`, `LongLat`, `Clue`, `Answer`, `Point`, `NextClueIfTrue`, `NextClueIfFalse`, `QuestPassword`, `UniqueCode`) VALUES (NULL,'$_POST[NamaSpot]','$_POST[LongLat]','$_POST[Clue]','$_POST[Answer]','$_POST[Point]','$_POST[NextClueIfTrue]','$_POST[NextClueIfFalse]','$_POST[QuestPassword]','UNIQUE')");
      if($quest_insert){
        echo "<script>alert('successfully insert data')</script>";
        echo"<script>document.location.href = 'index.php?menu=quest'</script>";
      }else{
        echo "<script>alert('failed insert data')</script>";
        echo"<script>document.location.href = 'index.php?menu=insert_quest'</script>";

      }
    }
    if(isset($_POST['update_quest'])){

    $IdQuest = $_POST['IdQuest'];
    
    $quest_update = mysqli_query($con,"UPDATE `tb_quest` SET `NamaSpot`='$_POST[NamaSpot]',`LongLat`='$_POST[LongLat]',`Clue`='$_POST[Clue]',`Answer`='$_POST[Answer]',`Point`='$_POST[Point]',`NextClueIfTrue`='$_POST[NextClueIfTrue]',`NextClueIfFalse`='$_POST[NextClueIfFalse]',`QuestPassword`='$_POST[QuestPassword]' WHERE IdQuest = '$IdQuest'");
    if($quest_update){ 
      echo"<script>alert('successfully update data')</script>";
      echo"<script>document.location.href='index.php?menu=quest'</script>";
    }else{
      echo"<script>alert('failed update data')</script>";
      echo"<script>document.location.href='index.php?menu=insert_quest'</script>";

    }
  }
    $quest_edit = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM tb_quest WHERE IdQuest ='$_GET[edit]'"));
   ?>
  <body>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Form Insert Quest</div>
        <div class="card-body">
          <form method="post">
            <!-- <div class="form-group"> -->
              <!-- <div class="form-row"> -->
                <input type="hidden" name="IdQuest" id="IdQuest" class="form-control" placeholder="Id Quest" required="required" autofocus="autofocus" value="<?php echo $quest_edit['IdQuest']?>">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="NameSpot" name="NamaSpot" class="form-control" placeholder="First name" required="required" autofocus="autofocus" value="<?php echo $quest_edit['NamaSpot'] ?>">
                    <label for="NameSpot">Name Spot</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="Longlat" name="LongLat" class="form-control" placeholder="Last name" required="required" value="<?php echo $quest_edit['LongLat'] ?>">
                    <label for="Longlat">LongLat</label>
                  </div>
                </div>
              <!-- </div> -->
            <!-- </div> -->
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="Clue" id="inputClue" class="form-control" placeholder="Email address" required="required" value="<?php echo $quest_edit['Clue'] ?>">
                <label for="inputClue">Clue</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="Answer" id="inputAnswers" class="form-control" placeholder="Email address" required="required" value="<?php echo $quest_edit['Answer'] ?>">
                <label for="inputAnswers">Answers</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="number" name="Point" id="inputPoint" class="form-control" placeholder="Point" required="required" value="<?php echo $quest_edit['Point'] ?>">
                <label for="inputPoint">Point</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="NextClueIfTrue" id="inputnct" class="form-control" placeholder="Point" required="required" value="<?php echo $quest_edit['NextClueIfTrue'] ?>">
                <label for="inputnct">Next Clue true</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="NextClueIfFalse" id="inputncf" class="form-control" placeholder="Point" required="required" value="<?php echo $quest_edit['NextClueIfFalse'] ?>">
                <label for="inputncf">Next Clue False</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="QuestPassword" id="questpassword" class="form-control" placeholder="Point" required="required" value="<?php echo $quest_edit['QuestPassword'] ?>">
                <label for="questpassword">Quest Password</label>
              </div>
            </div>
            <!-- <a class="btn btn-primary btn-block" href="">Submit</a> -->
            <?php if($_GET['edit']){ ?>
            <input type="submit" class="btn btn-primary btn-block" name="update_quest" value="UPDATE">
            <a href="index.php?menu=quest" class="btn btn-danger btn-block">CANCEL</a>
            <?php }else{ ?>
            <input type="submit" class="btn btn-primary btn-block" name="insert_questt" value="SAVE">
            <a href="index.php?menu=quest" class="btn btn-danger btn-block">CANCEL</a>
          <?php } ?>
          </form>
          <div class="text-center">
          </div>
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
