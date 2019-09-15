<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body >
  <body class="border-left border-right border-top border-bottom border align-items-center justify-content-center border-dark pb-2">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar14" style="">
        <p class="navbar-brand mb-0 text-white">
          <i class="fa d-inline fa-lg fa-stop-circle"></i> BRAND </p>
      </button>
      <div class="collapse navbar-collapse" id="navbar14">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Beranda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Tentang</a> </li>
        </ul>
        <p class="d-none d-md-block lead mb-0  text-white"> <i class="fa d-inline fa-lg fa-book"></i>&nbsp;BUKES</p>
        <ul class="navbar-nav ml-auto">
        
          <form action="/action_page.php" class="nav-item mx-1 mt-1">
            <input type="text" placeholder="Search.." name="search" >
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          <li class="nav-item mx-1" style=""> <a class="nav-link" href="#">
            <i class="fa  fa-fw fa-user-circle fa-2x"></i></i>
            </a> </li>
          <li class="nav-item mx-1" style=""> <a class="nav-link" href="keranjang.php">
            <i class="fa  fa-fw fa-2x fa-shopping-bag"></i></a></li>
          <li class="nav-item mx-1" style=""> <a class="nav-link" href="keranjang.php">
            <i class="fa  fa-fw fa-2x fa-question-circle"></i></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center text-white bg-light">
    <div class="container">
      <div class="row">
        <div class="p-5 col-lg-6 col-10 mx-auto border bg-dark">
          <h2 class="mb-4">Anda belum punya akun ?<br>Silahkan daftar</h2>
          <form method="post" action="<?php echo base_url('index.php/Welcome/beranda') ?>">
            <div class="form-group"> <input type="text" class="form-control" placeholder="Nama" id="form13"> </div>
            <div class="form-group"> <input type="email" class="form-control" placeholder="Email" id="form14"> </div>
            <div class="form-group"> <input type="password" class="form-control" placeholder="Kata sandi" id="form15"> <small class="form-text text-muted text-right">
                <a href="#" class="text-light" contenteditable="true">Sudah punya Akun ?</a>
              </small> </div> <button type="submit" class="btn btn-light text-dark" contenteditable="true" id="daftar">Daftar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>