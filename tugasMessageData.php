<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
  <!-- PHP untuk isi tabel -->
  <?php
    $name1 = 'Ines';
    $name2 = 'Ayu';
    $email1 = 'ines@gmail.com';
    $email2 = 'ayu@gmail.com';
    $message1 = 'Tidak Ada';
    $message2 = 'Bagus';
  ?>
  <div class="container">
    <!-- HEADER -->
    <div style="margin-bottom:0">
      <img class="card-img-top" src="assets/images/header1.jpg" alt="Ines" style="height: 300px">
    </div>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="#">Ines Ayu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Mesage Data</a>
          </li>    
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-light my-2 my-sm-0" type="button">Search</button>
        </form>
      </div>  
    </nav>

    <div class="row" style="margin-top:30px; margin-bottom:30px">
      <!-- CONTENT -->
      <div class="col-md-8">
        <h2 class="text-center mb-4">MESSAGE DATA</h2>
        <table class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td><?php echo $name1; ?></td>
              <td><?php echo $email1; ?></td>
              <td><?php echo $message1; ?></td>
            </tr>
            <tr>
              <td>2.</td>
              <td><?php echo $name2; ?></td>
              <td><?php echo $email2; ?></td>
              <td><?php echo $message2; ?></td>
            </tr>
          </tbody>
        </table>
        <ul class="pagination pagination-sm justify-content-center">
          <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
          <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
          <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
          <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
        </ul>
        <hr class="d-md-none">
      </div>
      
      <!-- BANNER -->
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="assets/images/cw.png" alt="Card Ines">
          <div class="card-body">
            <h4 class="card-title">Ines Ayu Mega</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-secondary">See Profile</a>
          </div>
          <h2 class="mt-4">About Me</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="jumbotron text-center" style="margin-bottom:0">
      <p>Copyright &copy; Ines Ayu 2020</p>
    </div>
  </div>
</body>
</html>