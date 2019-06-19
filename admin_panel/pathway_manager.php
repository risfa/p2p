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


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>&nbsp;PATHWAY MANAGER</div>
            <div class="card-body">
              <a href="index.php?menu=insert_pathway"><button class="btn btn-success">MANAGE PATHWAY</button></a><br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Group Name</th>
                      <?php for ($i=0; $i < 10; $i++) {  ?>
                      <th>Spot  <?php echo $i; ?></th>
                      <?php } ?>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if(isset($_GET['delete'])){
                        $id_quest = $_POST['IdUser'];
                        $quest_delete = mysqli_query($con,"DELETE FROM `tb_quest` WHERE `IdQuest` = '$_GET[delete]'");
                        if($quest_delete){
                          echo"<script>alert('successfully delete data')</script>";
                          echo"<script>document.location.href='index.php?menu=quest'</script>";
                        }else{
                          echo"<script>alert('failed delete data')</script>";
                          echo"<script>document.location.href='index.php?menu=quest'<script>";
                        }
                      }
                      $No =1;
                      $quest = mysqli_query($con,"SELECT * FROM tb_quest ORDER BY IdQuest DESC");
                      while($data_quest = mysqli_fetch_array($quest)){
                       ?>

                    <tr>
                      <td>No</td>
                      <td>Group Name</td>
                      <?php for ($i=0; $i < 10; $i++) {  ?>
                      <td>Spot <?php echo $i; ?></td>
                      <?php } ?>
                      <td>Action</td>
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