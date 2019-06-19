    <?php include 'connect.php'; 

    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
    
    
    <div id="wrapper">


      <div id="content-wrapper">

        <div class="container-fluid">
          
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              Dashboard User
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            USER</div>
            <div class="card-body">
              <a href="index.php?menu=insert_user"><button class="btn btn-success">INSERT USER</button></a><br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Score</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Score</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php 
                      if(isset($_GET['delete'])){
                        $id_user = $_POST['IdUser'];
                        $user_delete = mysqli_query($con,"DELETE FROM `tb_user` WHERE IdUser = '$_GET[delete]'");
                        if($user_delete){
                          echo"<script>alert('berhasil delete')</script>";
                          echo"<script>document.location.href='index.php?menu=user'</script>";
                        }else{
                          echo"<script>alert('tidak berhasil delete')</script>";
                          echo"<script>document.location.href='index.php?menu=user'</script>";
                        }
                      }
                      $No =1;
                      $user = mysqli_query($con,"SELECT * FROM tb_user ORDER BY IdUser DESC");
                      while($data_user = mysqli_fetch_array($user)){
                       ?>
                    <tr>
                       <td><?php echo $No++; ?></td>
                       <td><?php echo $data_user['NamaUser'] ?></td>
                       <td><?php echo $data_user['Phone'] ?></td>
                       <td><?php echo $data_user['Email'] ?></td>
                       <td><?php echo $data_user['Gender'] ?></td>
                       <td><?php echo $data_user['Score'] ?></td>
                       <td>
                        <a href="index.php?menu=user&delete=<?php echo $data_user[0] ?>" action="yakin mau delete?"><i class="fas fa-trash-alt" title="delete"></i></a> /
                        <a href="index.php?menu=insert_user&edit=<?php echo $data_user[0] ?>"><i class="fas fa-edit" title="edit-data"></i></a>
                      </td>
                  </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="container" >
      <div class="row">
                    
                     
                    </div>
                    </div>
                    <br><br>
                   
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>

        <!-- <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p> -->

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <!-- <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer> -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  </body>
    </html>
  <script type="text/javascript">
    function hide_form(){
        document.getElementById("formnya").style.display = "none";
        document.getElementById("datanya").style.display = "block";
        // $('#').style.display="none";
        // $('#').style.display="block";
    }
    function hide_table(){

        document.getElementById("formnya").style.display = "block";
        document.getElementById("datanya").style.display = "none";
        // $('#formnya').style.display="block";
        // $('#datanya').style.display="none";
    }
  </script>