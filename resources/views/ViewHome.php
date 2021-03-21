<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <title>Internsip</title>

<style>

    #title{
        font-size: 40px;
        color: black;
        font-weight:bold;
    }
    #nav1{
        font-size: 22px;
        position: relative;
        right: -200px;
        bottom:-5px;
        color: black;
        font-weight:bold;
    }

    #nav2{
        font-size: 22px;
        position: relative;
        right: -250px;
        bottom:-5px;
        color: black;
        font-weight:bold;
    }

    #nav3{
        font-size: 22px;
        position: relative;
        right: -300px;
        bottom:-5px;
        color: black;
        font-weight:bold;
    }

    #img1{
        position:relative;
        top: -20px;
        width:1519px;
    }

    #select{
        font-size:22px;
    }

    #formpilihbahasa{
        position:relative;
        right:-480px;
        bottom:-12px;
    }

    #selectbahasa{
        background-color: #F0FFF0;
        position:relative;
        right:-5px;
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
        font-size: 23px;
        outline: 0;
        border-width: 0 0 2px;
        border-color: whitesmoke;
        background-color: transparent;
    }

    #wilayah{
        position:relative;
        bottom: -60px;
        font-size: 23px;
        outline: 0;
        border-width: 0 0 2px;
        border-color: whitesmoke;
        background-color: transparent;
    }

    #spesialisasi{
        position:relative;
        bottom: -120px;
        font-size: 23px;
        outline: 0;
        border-width: 0 0 2px;
        border-color: whitesmoke;
        background-color: transparent;
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
          <a class="nav-link active" id="nav1" href="#">Cari Lowongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="nav2" href="#">Tips Diterima</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="nav3" href="#">Cari Perusahaan</a>
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
            </form>
        </div>
</div>
</body>
</html>