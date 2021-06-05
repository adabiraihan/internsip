<!DOCTYPE html>
<html>
<head>

<title>Cari Lowongan</title> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="/css/cari_lowongan.css" rel="stylesheet">

</head>

<!-- Berfungsi untuk memberi navbar pada halaman tersebut-->


<body>
  <!-- REFACTORING 
    <nav class="navbar navbar-expand-lg navbar navbar-light bg-transparent" id="wholenavbar">
        <div class="container-fluid">
          <a class="navbar-brand" id="title" href="ViewHome.php">INTERNSIP</a>
          <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="nav1" href="#">Cari Lowongan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nav2" href="#">Cari Perusahaan</a>
              </li>
              <li class="nav-item">
                <a href="#ModalLogin" class="nav-link active trigger-btn" data-toggle="modal" id="nav3">My Internsip</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
END REFACTORING -->

@yield('wholenavbar')

<!--Berfungsi untuk memberikan efek carousel pada view halaman terusebut ( carousel = gambar yang bergerak ke kiri dan kekanan)-->

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/cisco.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Cisco Company</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/pwc.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>PWC</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/telkom.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Telkom</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!--Carousel End-->
<br>
<br>

<!-- Berfungsi untuk membuat class view Card untuk memberikan detail tentang setiap lowongan yang akan ditambahkan -->
<section class="details-card">
  <h2 style="position: relative;right:-15px;">Lowongan Tersedia Saat Ini</h2>
  <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/cisco.jpg" alt="">
                    </div>
                    <div class="card-desc">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info"><i class="fa fa-briefcase"style="font-size:20px;"></i>   Cisco Company</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-user"style="font-size:20px;"></i>   System Administrator</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-map-marker"style="font-size:20px;"></i>   Jakarta</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-clock-o"style="font-size:20px;"></i>   3 Bulan</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-inr"style="font-size:20px;"></i>   Rp 1.500.000 / 3 Bulan</li>
                        </ul>   
                        <br> 
                        <a href="#" class="btn-card">Apply</a>
                        <a href="#Modal1" data-toggle="modal" style="position: relative;right: -30%;color: #000000;">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/telkom.png" alt=""> 
                    </div>
                    <div class="card-desc">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info"><i class="fa fa-briefcase"style="font-size:20px;"></i>   Telkomsel</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-user"style="font-size:20px;"></i>   Database Admin</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-map-marker"style="font-size:20px;"></i>   Jakarta</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-clock-o"style="font-size:20px;"></i>   2 Bulan</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-inr"style="font-size:20px;"></i>   Rp 1.000.000 / 2 Bulan</li>
                       </ul> 
                       <br> 
                       <a href="#" class="btn-card">Apply</a>
                       <a href="#Modal2" data-toggle="modal" style="position: relative;right: -30%;color: #000000;">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/pwc.png" alt="">
                    </div>
                    <div class="card-desc"> 
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info"><i class="fa fa-briefcase"style="font-size:20px;"></i>   PwC</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-user"style="font-size:20px;"></i>   Back-end Engineer</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-map-marker"style="font-size:20px;"></i>   Jakarta</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-clock-o"style="font-size:20px;"></i>   3 Bulan</li>
                            <li class="list-group-item list-group-item-success"><i class="fa fa-inr"style="font-size:20px;"></i>   Rp 2.000.000 / 3 Bulan</li>
                       </ul>  
                       <br>  
                       <a href="#" class="btn-card">Apply</a>
                       <a href="#Modal3" data-toggle="modal" style="position: relative;right: -30%;color: #000000;">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Tiap modal mempresentasikan tiap lowongan yang ada, yang sebelumnya class nya telah dibuat diatas-->

<!-- Modal 1 -->
<div class="modal fade" id="Modal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Pekerjaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ea magnam modi reiciendis vel, ut vero, necessitatibus optio eum non nostrum deleniti aperiam doloribus eveniet blanditiis maxime impedit sit quaerat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="Modal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Pekerjaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ea magnam modi reiciendis vel, ut vero, necessitatibus optio eum non nostrum deleniti aperiam doloribus eveniet blanditiis maxime impedit sit quaerat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="Modal3" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Pekerjaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, ea magnam modi reiciendis vel, ut vero, necessitatibus optio eum non nostrum deleniti aperiam doloribus eveniet blanditiis maxime impedit sit quaerat.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>