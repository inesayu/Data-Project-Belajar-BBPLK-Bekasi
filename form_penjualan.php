<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Penjualan</title>
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
  <div class="container">
    <!-- HEADER -->
    <div style="margin-bottom:0">
      <img class="card-img-top" src="assets/images/atk.jpg" alt="Ines" style="height: 300px">
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
            <a class="nav-link active" href="#">Form Penjualan</a>
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
        <h2 class="text-center">PENJUALAN ALAT TULIS KANTOR</h2><br>
        <form action="proses_bayar.php" method="post">
          <div class="form-inline">
            <div class="col-12 col-md-3">
              <label for="nama">Nama Barang:</label>
            </div>
            <div class="col-12 col-md-8">
              <select class="form-control w-100" id="nama" name="nama">
                <option>Buku Tulis</option>
                <option>Pulpen</option>
                <option>Pensil</option>
                <option>Penghapus</option>
                <option>Penggaris</option>
              </select>
            </div>
          </div><br>
          <div class="form-inline">
            <div class="col-12 col-md-3">
              <label for="harga">Harga Barang:</label>
            </div>
            <div class="col-12 col-md-8">
              <input type="number" min="0" class="form-control w-100" id="harga" name="harga" required="">
            </div>
          </div><br>
          <div class="form-inline">
            <div class="col-12 col-md-3">
              <label for="jumlah">Jumlah Barang:</label>
            </div>
            <div class="col-12 col-md-8">
              <input type="number" min="0" class="form-control w-100" id="jumlah" name="jumlah" required="">
            </div>
          </div><br>
          <button type="submit" class="btn btn-secondary form-control">Hitung</button>
        </form>
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