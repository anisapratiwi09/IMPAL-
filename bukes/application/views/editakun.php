<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
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

  <div class="py-5" style="" >
    <div class="container">
      <div class="row">
        <div class="col-3">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item"> <a href="" class="active nav-link" data-toggle="pill" data-target="#tabone">Akun Saya</a> </li>
            <li class="nav-item"> <a class="nav-link" href="" data-toggle="pill" data-target="#tabtwo">Pesanan Saya</a> </li>
            <li class="nav-item"> <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree">Keranjang Saya</a> </li>
          </ul>
        </div>
        <div class="col-9">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <div class="col-md-12 p-4">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-12"> <input type="text" class="form-control" id="form36" placeholder="Nama Lengkap"> </div>
                  </div>
                  <div class="form-group"> <input type="email" class="form-control" id="form39" placeholder="Email"> </div>
                  <div class="form-row">
                    <div class="form-group col-md-6"> <input type="number" class="form-control" id="form40" placeholder="Jenis Kelamin"> </div>
                    <div class="form-group col-md-6"> <input type="text" class="form-control" id="form41" placeholder="No. HP"> </div>
                  </div>
                  <div class="form-group"> <input type="text" class="form-control" id="form42" placeholder="Alamat"> </div>
                  <button type="submit" class="btn text-light btn-dark">Simpan</button>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <p class=""></p>
            </div>
            <div class="tab-pane fade" id="tabthree" role="tabpanel">
              <p class=""></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-light bg-dark">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Bukes</h2>
          <p>Bukes merupakan perusahaan penjualan buku bekas online untuk membantu mahasiswa membeli buku dengan mudah dan dengan harga yang miring</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Tentang Bukes</h2>
          <ul class="list-unstyled">Tentang Kami<br>Toko kami<br>Kerjasama&nbsp;<br><br></ul>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Contact</h2>
          <p class="text-light bg-dark"> <a href="#" class="text-light">
              <i class="fa d-inline mr-3 text-muted fa-phone"></i>+022 - 123 456&nbsp;</a>789</p>
          <p class="text-light"> <a href="#" class="text-light">
              <i class="fa d-inline mr-3 text-muted fa-envelope-o"></i>info@bukes.com</a> </p>
          <p class="text-light"> <a href="#" class="text-dark">
              <i class="fa d-inline mr-3 fa-map-marker text-muted"></i>J</a>l. Telekomunikasi, Sukapura Dayeuhkolot, Kabupaten Bandung</p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4">Subscribe</h2>
          <form>
            <fieldset class="form-group"> <label for="exampleInputEmail1">Dapatkan berita menarik seputar event dan promo&nbsp;</label> <input type="email" class="form-control" placeholder="Masukkan email"> </fieldset> <button type="submit" class="btn btn-outline-dark">Daftar</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center">© Copyright 2018 Pingendo - All rights reserved. </p>
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