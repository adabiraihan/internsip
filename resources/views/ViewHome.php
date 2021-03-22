<!DOCTYPE html>
<html>
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsip</title>

<!--RESOURCES BUAT MODAL-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!--BRRRRRRRRRRRRRRRT-->

<style>

    #title{
        font-size: 3vw;
        color: black;
        font-weight:bold;
    }
    #nav1{
        font-size: 1.5vw;
        position: relative;
        right: -50%;
        bottom: -15%;
        color: black;
        font-weight:bold;
    }

    #nav2{
        font-size: 1.5vw;
        position: relative;
        right: -70%;
        bottom:-15%;
        color: black;
        font-weight:bold;
    }

    #nav3{
        font-size: 1.5vw;
        position: relative;
        right: -120%;
        bottom:-15%;
        color: black;
        font-weight:bold;
    }

    #img1{
        position:relative;
        top: -25px;
        width:100%;
    }

    #select{
        font-size:1.5vw;
    }

    #formpilihbahasa{
        position:relative;
        right:-135%;
        bottom:-15px;
    }

    #selectbahasa{
        background-color: #F0FFF0;
        position:relative;
        right:-2%;
        width:155px;
        height:35px;
        border: 6px solid transparent;
    }

    #formcarikerja{
        position:relative;
        top:-680px;
    }

    #jenisjob{
        position:relative;
        font-size: 1.5vw;
        outline: 0;
        border-width: 0 0 2px;
        border-color: whitesmoke;
        background-color: transparent;
    }

    #wilayah{
        position:relative;
        bottom: -60px;
        font-size: 1.5vw;
        outline: 0;
        border-width: 0 0 2px;
        border-color: whitesmoke;
        background-color: transparent;
    }

    #spesialisasi{
        position:relative;
        bottom: -120px;
        font-size: 1.5vw;
        outline: 0;
        border-width: 0 0 2px;
        border-color: whitesmoke;
        background-color: transparent;
    }

    #buttoncari{
        position: relative;
        bottom: -190px;
        left: -267px;
        height: 50px;
        width: 260px;
    }

    .modal-login {
        color: #636363;
        width: 350px;
    }
    .modal-login .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }
    .modal-login .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }
    .modal-login h4 {
        text-align: center;
        font-size: 26px;
    }
    .modal-login  .form-group {
        position: relative;
    }
    .modal-login i {
        position: absolute;
        left: 13px;
        top: 11px;
        font-size: 18px;
    }
    .modal-login .form-control {
        padding-left: 40px;
    }
    .modal-login .form-control:focus {
        border-color: #00ce81;
    }
    .modal-login .form-control, .modal-login .btn {
        min-height: 40px;
        border-radius: 3px; 
    }
    .modal-login .hint-text {
        text-align: center;
        padding-top: 10px;
    }
    .modal-login .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }
    .modal-login .btn, .modal-login .btn:active {	
        border: none;
        background: #00ce81 !important;
        line-height: normal;
    }
    .modal-login .btn:hover, .modal-login .btn:focus {
        background: #00bf78 !important;
    }
    .modal-login .modal-footer {
        background: #ecf0f1;
        border-color: #dee4e7;
        text-align: center;
        margin: 0 -20px -20px;
        border-radius: 5px;
        font-size: 13px;
        justify-content: center;
    }
    .modal-login .modal-footer a {
        color: #999;
    }

    #modal-body-regist{
        width: 500px;
    }

</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-light bg-transparent" id="wholenavbar">
  <div class="container-fluid">
    <a class="navbar-brand" id="title" href="#">INTERNSIP</a>
    <button class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="nav1" href="ViewCariLowongan.php">Cari Lowongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav2" href="#">Cari Perusahaan</a>
        </li>
        <li class="nav-item">
          <a href="#ModalLogin" class="nav-link active trigger-btn" data-toggle="modal" id="nav3">My Internsip</a>
        </li>
        <li>
            <div class="language-picker js-language-picker">
                <form action="" class="language-picker__form" id="formpilihbahasa">
                    <label for="language-picker-select" id="select">Pilih Bahasa</label>
                    <select name="language-picker-select" id="selectbahasa">
                        <option lang="de" value="deutsch"selected>Bahasa Indonesia</option>
                        <option lang="en" value="english" >English</option>
                        <option lang="fr" value="francais">Français</option>
                        <option lang="it" value="italiano">Italiano</option>
                    </select>
                </form>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<img src="img/homepic.jpg" id="img1">

<div class="container">   
        <div class="top-left"> 
            <form id="formcarikerja" clas="form-control form-control-lg">
                <h1 style="color: white;">Jenis Pekerjaan</h1>
                <input type="text" id="jenisjob" placeholder="Designing">
                <br>
                <h1 style="color: white;position:relative;bottom:-60px;">Wilayah</h1>
                <input type="text" id="wilayah" placeholder="Bandung">
                <br>
                <h1 style="color: white;position:relative;bottom:-120px;">Spesialisasi</h1>
                <input type="text" id="spesialisasi" placeholder="Quality Assurance">
                
                <button type="button" class="btn btn-primary btn btn-lg" id="buttoncari">Cari Lowongan !</button>
            </form>
        </div>
</div>

<!-- MODAL LOGIN POP UP-->

<div id="ModalLogin" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#ModalRegister" class="nav-link active trigger-btn" data-dismiss="modal" data-toggle="modal">Belum punya akun ? Klik untuk Registrasi</a>
			</div>
		</div>
	</div>
</div>    
<!--MODAL BRTTTTTTT--> 


<!-- Modal Register-->
<div id="ModalRegister" class="modal fade" >
	<div class="modal-dialog modal-login" id="modal-body-regist">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Registration</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Username" required="required">
					</div>
                    <div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Password" required="required">
					</div>
                    <div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Confirm Password" required="required">
					</div>
                    <div class="form-group">
						<i class="fa fa-address-card"></i>
						<input type="text" class="form-control" placeholder="Nama Lengkap" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-calendar "></i>
						<input type="text" class="form-control" placeholder="TTL" required="required">					
					</div>
                    <div class="form-group">
						<i class="fa fa-university"></i>
						<input type="text" class="form-control" placeholder="Pendidikan Terakhir" required="required">					
					</div>
                    <div class="form-group">
						<i class="fa fa-envelope "></i>
						<input type="text" class="form-control" placeholder="Email" required="required">					
					</div>
                    <div class="form-group">
						<i class="fa fa-address-book "></i>
						<input type="text" class="form-control" placeholder="No Telp" required="required">					
					</div>
                    <div class="form-group">
						<i class="fa fa-home"></i>
						<input type="text" class="form-control" placeholder="Alamat" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>    

</body>
</html>