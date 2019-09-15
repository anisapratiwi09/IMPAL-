<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <style> * {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
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
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active border-bottom border-dark bg-light"> <img class="d-block mx-auto w-50 pt-3 pb-3" src="../image/sisi1.jpg">
              </div>
              <div class="carousel-item "> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with indicators</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with indicators</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div id="myBtnContainer">
          <button class="btn active active active active active active active active active active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn active active active active active active active active active active active active active active active active active active active active active active" onclick="filterSelection('jaringan')">Jaringan</button>
          <button class="btn active active active active active active active active active active active active active active" onclick="filterSelection('programming')">Programming</button>
          <button class="btn active active active active active active active active active active" onclick="filterSelection('database')">Database</button>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <!-- Portfolio Gallery Grid -->
      <div class="row">
        <div class="column nature">
          <div class="content">
            <img src="../image/jaringan1.jpg" alt="Mountains" style="width:100%">
            <h4>Mountains</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
            <img src="../image/jaringan2.jpg" alt="Lights" style="width:100%">
            <h4>Lights</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column nature">
          <div class="content">
            <img src="" alt="Nature" style="width:100%">
            <h4>Forest</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column cars">
          <div class="content">
            <img src="../image/programming1.jpg" alt="Car" style="width:100%">
            <h4>Retro</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column cars">
          <div class="content">
            <img src="../image/programming2.jpg" alt="Car" style="width:100%">
            <h4>Fast</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column cars">
          <div class="content">
            <img src="../image/programming3.jpg" alt="Car" style="width:100%">
            <h4>Classic</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column people show">
          <div class="content">
            <img src="../image/database2.jpg" alt="Car" style="width:100%">
            <h4>Girl</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column people show">
          <div class="content">
            <img src="../image/database3.jpg" alt="Car" style="width:100%">
            <h4>Man</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="column people show">
          <div class="content">
            <img src="../image/database4.jpg" alt="Car" style="width:100%">
            <h4>Woman</h4>
            <p>Lorem ipsum dolor..</p>
          </div>
        </div>
        <!-- END GRID -->
      </div>
    </div>
  </div>
  <div class="text-light bg-dark" >
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
  <script>
    filterSelection("all")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
</body>

</html>