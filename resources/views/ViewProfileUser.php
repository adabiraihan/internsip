<!DOCTYPE html>
<html>
<head>

<title>My Profile</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }


    .modal-edit {
        color: #636363;
        width: 350px;
    }
    .modal-edit .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }
    .modal-edit .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }
    .modal-edit h4 {
        text-align: center;
        font-size: 26px;
    }
    .modal-edit  .form-group {
        position: relative;
    }
    .modal-edit i {
        position: absolute;
        left: 13px;
        top: 11px;
        font-size: 18px;
    }
    .modal-edit .form-control {
        padding-left: 40px;
    }
    .modal-edit .form-control:focus {
        border-color: #00ce81;
    }
    .modal-edit .form-control, .modal-edit .btn {
        min-height: 40px;
        border-radius: 3px; 
    }
    .modal-edit .hint-text {
        text-align: center;
        padding-top: 10px;
    }
    .modal-edit .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }
    .modal-edit .btn, .modal-edit .btn:active {	
        border: none;
        background: #00ce81 !important;
        line-height: normal;
    }
    .modal-edit .btn:hover, .modal-edit .btn:focus {
        background: #00bf78 !important;
    }
    .modal-edit .modal-footer {
        background: #ecf0f1;
        border-color: #dee4e7;
        text-align: center;
        margin: 0 -20px -20px;
        border-radius: 5px;
        font-size: 13px;
        justify-content: center;
    }
    .modal-edit .modal-footer a {
        color: #999;
    }

    #modal-body-regist{
        width: 500px;
    }
</style>

</head>
<body>
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="data:image/jpeg;base64,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">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <a href="ViewHome.php" class="fa fa-angle-left" style="font-size: 50px;position: absolute;left: -68%;top: -15%;text-decoration: none;"></a>
                        <div class="profile-head">
                                    <h5>
                                        Muhammad Burhan Binti Aisyah
                                    </h5>
                                    <h6>
                                        Backend Engineer
                                    </h6>
                                    <p class="proile-rating">Bio : <span>Saya adalah seorang orang antapani yg sedang mengerjakan rpl</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#ModalEditUser" class="nav-link active trigger-btn" data-bs-toggle="modal">Edit Profile</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Burhan@gmail.com</a><br/>
                            <a href="">www.github/akuganteng.com</a><br/>
                            <a href="">wwww.Linkedin/akutampan.com</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tab-content profile-tab" id="ProfileTab">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama : </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Burhans</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tempat Tanggal Lahir : </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Danau Toba, 25 Desember 1923</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Universitas : </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Telkom University</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>burhan@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone : </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>081696969</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>



<!-- MODAL EDIT PROFILE-->
<div id="ModalEditUser" class="modal fade" >
	<div class="modal-dialog modal-edit" id="modal-body-edit">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Edit Profile</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Username" required="required">
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
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Confirm">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>    
</body>
</html>