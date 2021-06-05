<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Isi Nama Perusahaan dan :)</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
<link href=" https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" rel="stylesheet">  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- Berfungsi untuk membuat View dari Profile Perusahaan-->

<link href="/css/profile_perusahaan.css" rel="stylesheet">

</head>

<body>
<div style="background-color: white;">    
    <nav class="navbar navbar-expand-lg navbar navbar-light bg-transparent" id="wholenavbar">
        <div class="container-fluid">
          <a class="navbar-brand" id="title" href="ViewHome.php">INTERNSIP</a>
          <div class="collapse navbar-collapse"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" id="nav1" href="#">Cari Lowongan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nav2" href="#">Cari Perusahaan</a>
              </li>
              <li class="nav-item">
                <p class="nav-link" id="nav3">NAMA USER/PERUSAHAAN</p>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
<br>
<br>
    <div class="col-md-6 col-md-offset-3">
    <div class="panel">
        <div class="panel-body">
           
            <div class="profile-layout">
                
                <div class="profile-section">
                    
                        <div class="profile-img-section">
                            <img src="img/telkom.png" class="img-responsive profile-img">
                        </div>
                        <div class="text-information">
                            <h2 class="main-name">Telkomsel Indonesia</h2> <!-- NAMPILIN NAMA PERUSAHAAN -->
                            <h5 class="email-info">telkomsel@gmail.com</h5> <!--NAMPILIN EMAIL PERUSAHAAN-->
                        </div>
                        <div class="tab-section">
                            <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#home" ><i class="fa fa-info-circle fa-lg"></i></a></li>
                              <li><a data-toggle="tab" href="#menu1"><i class="fa fa-users fa-lg"></i></a></li>
                              <li><a data-toggle="tab" href="#menu2"><i class="fa fa-picture-o fa-lg"></i></a></li>
                            </ul>
        
                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active"> <!-- MENU BUAT UPDATE / EDIT DATA DARI PERUSAHAAN-->
                               
                                <div class="info-section no-edit-forms">
                                    <div class="form-group text-right">
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalEditPerusahaan">Edit</button>
                                        <a class="label label-info hide" id="cancel-info">Cancel</a>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-book fa-lg"></i></span>
                                            <input  type="text" class="form-control"  placeholder="Email" value="0869696969">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-lg"></i></span>
                                            <input id="" type="text" class="form-control" name="email" placeholder="Address" value="Rasuna Said Jekarte tenggara">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div id="menu1" class="tab-pane fade"> <!-- MENU BUAT PROFILE DARI PERUSAAHN TERSEBUT-->
                                <div class="friend-list">
                                    <div class="media">
                                        <a href="#">
                                          <div class="media-body">
                                            <h4 class="media-heading">Telkomsel adalah merek GSM dan UMTS operator jaringan seluler telpon yang beroperasi di Indonesia. Merek ini dimiliki oleh Telkom Indonesia dan Indosat dengan komposisi saham sebesar 65% oleh Telkomsel dan sisanya oleh Indosat pada awal peluncurannya pada tanggal 26 Mei 1995 di Jakarta.</h4>
                                          </div>
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div id="menu2" class="tab-pane fade"> <!-- MENU BUAT LIAT SIAPA AJA YANG UDAH NGELAMAR CUMA PERUSAHAAN DOANG YG BISA LIAT -->
                                <div class="form-group"> 
                                    <div class="input-group">
                                        <br>
                                        <br>
                                        <table class="table table-hover table-striped">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Pendidikan</th>
                                                <th>Universitas</th>
                                                <th>Status</th>
                                              </tr>
                                              <tr>
                                                <td><a href="NGELIAT KE SI PROFILE USER">Pak dadang</a></td>
                                                <td>Siskamling</td>
                                                <td>Univ Catur</td>
                                                <th><button class="btn btn-info" type="submit">Terima</button> <button class="btn btn-danger" type="submit">Tolak</button></th>
                                              </tr>
                                              <tr>
                                                <td><a href="NGELIAT KE SI PROFILE USER">eve</a></td>
                                                <td>Jackson</td>
                                                <td>94</td>
                                                <th><button class="btn btn-info" type="submit">Terima</button> <button class="btn btn-danger" type="submit">Tolak</button></th>
                                              </tr>
                                        </table>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<!-- MODAL EDIT PROFILE-->
<div id="ModalEditPerusahaan" class="modal fade" >
	<div class="modal-dialog modal-edit" id="modal-body-edit">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Edit Profile</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Nama Perusahaan" required="required">
					</div>
                    <div class="form-group">
						<i class="fa fa-address-card"></i>
						<input type="text" class="form-control" placeholder="No HP" required="required">
					</div>
                    <div class="form-group">
						<i class="fa fa-address-card"></i>
						<input type="text" class="form-control" placeholder="Email" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-calendar "></i>
						<input type="text" class="form-control" placeholder="Alamat" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Confirm">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>    
    
</body>


</html>