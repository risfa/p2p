<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- font awsome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <style>
  *{
    font-family: 'Ubuntu', sans-serif;
    color:#1aacda;
  }
  </style>

  <title>p2p!</title>
</head>
<body>
  <div class="container">
    <div class="row" style="padding-top: 10px;padding-bottom: 10px; border-bottom: 3px solid #1aacda;">
      <div class="col-4"></div>
      <div class="col-4">
        <center>
        <img src="assets/p2p_logo.png" style="width: 65px;">
        </center>
      </div>
      <div class="col-4" style="padding-top: 5px;">
        <button style="float: right;background-color: #1aacda;
      border-color:#1aacda;" class="btn btn-primary" ><i class="fas fa-sign-out-alt" style="color: white;"></i></button>
      </div>
    </div>

    <?php switch ($_GET['menu']) {
      case 'login':
        include('parts/login_screen.php');
        break;
      case 'home':
          include('parts/home.php');
          break;
      case 'score':
          include('parts/score.php');
          break;
      case 'group':
          include('parts/group.php');
          break;     
      
      default:
        include('parts/home.php');
        break;
    } ?>

  </div>

  <style type="text/css">
    .card-header
    {
      background-color: #1aacda;
      color: white;
    }
    .btn .btn-primary
    {
      background-color: #1aacda;
      border-color:#1aacda;
    }
    .nav1
    {
      background-color: #1aacda;
      color: white;
    }
  </style>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>