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



<style>

    #title{
        font-size: 3vw;
        position: relative;
        bottom: -10px;
        color: black;
        font-weight:bold;
    }

    #nav1{
        font-size: 1.5vw;
        position: relative;
        right: -200%;
        top: -20px;
        color: black;
        font-weight:bold;
    }

    #nav2{
        font-size: 1.5vw;
        position: relative;
        right: -230%;
        top: -20px;
        color: black;
        font-weight:bold;
    }

    #nav3{
        font-size: 1vw;
        position: relative;
        right: -400%;
        top: -20px;
        color: black;
        font-weight:bold;
    }

    table, th, td {
        border: 1px solid black;
        width: 5%;
    }

    body{
            background: -webkit-linear-gradient(left, #ad9bf3, #35c6ee);
    }

    .profile-layout .profile-section .main-name,.profile-layout .profile-section .email-info{
        text-align:center;
        margin:0;
    }
    .profile-layout{
        min-height:200px;
        border:1px solid #dadada;
    }
    .profile-layout .profile-section .main-name{
        margin-top:10px;
        margin-bottom:10px;
        font-family: 'Cinzel', serif;
    }
    .profile-layout .profile-img-section{
        height:300px;
    position:relative;
    padding:20px 10px 20px 10px !important;
    background: linear-gradient(to right, #7c9efc, #2270e6);
    
    
    }
    .profile-layout .profile-img-section .profile-img{
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
    width:200px;
    height:200px;
    }
    .profile-layout .profile-img{
        
        top:0;
    
        border-radius:50%;
        overflow:hidden;
        margin:0 auto;
    }

    .profile-layout .profile-section .text-information .email-info{
        color:#909090;
        margin-bottom:15px;
        font-family: 'Nunito Sans', sans-serif;
        font-size:16px;
    }
    .profile-section .tab-section .nav-tabs{
        border-bottom:1px solid #428BCA;
        border-top:1px solid #428bca;
    } 
    .profile-section .tab-section .tab-content,.profile-layout .profile-img-section,.profile-layout .profile-section .text-information {
        padding:20px 10px;
    }
    .profile-section .tab-section .nav-tabs>li{
        margin-bottom:0px;
    }
    .profile-section .tab-section .nav-tabs>li>a{
        padding: 15px 20px;
    }

    .profile-section .tab-section .nav-tabs>li.active>a{
        border:1px solid #428bca;
        background:#428bca;
        color:#fff;
        border-radius:0px;
    }

    .profile-section .tab-section .tab-pane .form-control{
        height:45px;
        border-radius:0;
    }
    .profile-section  .tab-pane>.form-group:last-of-types{
        margin-bottom:0px;
    }
    .profile-section .btn-submit{
            height: 40px;
        line-height: 28px;
        border-radius: 2px;
        
    }
    .profile-section span.input-group-addon{
        min-width:50px;
    }
    .profile-section span.input-group-addon .fa-lg{
        font-size:20px;
    }
    .no-edit-forms input.form-control{
        background:#eee;
        box-shadow:none;
        pointer-events:none;
    }
    .profile-section .friend-list .media>a,.profile-section .friend-list .media>a:hover{
        text-decoration:none;
    }

    .profile-section .friend-list .media-left .media-object{
        height:auto;
    }
    .profile-section .friend-list .media-heading{
        color:#464646;
        line-height: 20px;
    }

</style>

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
                            <h2 class="main-name">Telkomsel Indonesia</h2>
                            <h5 class="email-info">telkomsel@gmail.com</h5>
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
                                        <a class="label label-info " id="edit-info">Edit</a>
                                        <a class="label label-info hide" id="cancel-info">Cancel</a>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card fa-lg"></i></span>
                                            <input type="text" class="form-control" name="" placeholder="" value="Telkomsel">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-open fa-lg"></i></span>
                                            <input  type="text" class="form-control"  placeholder="Email" value="0869696969">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker fa-lg"></i></span>
                                            <input id="" type="text" class="form-control" name="email" placeholder="Address" value="Rasuna Said Jekarte tenggara">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                       <a class="btn-primary btn btn-submit">Submit</a>
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
    
    
</body>


</html>