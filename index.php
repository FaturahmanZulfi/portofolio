<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        html {
            scroll-behavior: smooth;
        }
        @font-face {
            font-family: "Matgard";
            src: url('assets/font/Matgard.otf');
        }
        *{
            font-family: calibri;
        }
        td{
            padding-left:1%;
        }
        button{
            margin: 2px 0%;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            <td colspan="1" height="100px" style="text-align: center;"><img src="assets/img/logo.png" alt="" height="100px" class="mt-2"></td>
            <td colspan="5" valign="center" style="font-family:Matgard; font-size:70px; text-align: center;">RIDE TILL DIE</td>
        </tr>
        <tr>
            <td width="16.6%" class="p-2" align="center" style="border-top: 1px solid black;border-bottom: 1px solid black;"><a href="index.php" class="text-dark">Home</a></td>
            <td width="16.6%" class="p-2" align="center" style="border-top: 1px solid black;border-bottom: 1px solid black;"><a href="profile.php" class="text-dark">Profile</a></td>
            <td width="16.6%" class="p-2" align="center" style="border-top: 1px solid black;border-bottom: 1px solid black;"><a href="visimisi.php" class="text-dark">Visi dan Misi</a></td>
            <td width="16.6%" class="p-2" align="center" style="border-top: 1px solid black;border-bottom: 1px solid black;"><a href="produkkami.php" class="text-dark">Produk Kami</a></td>
            <td width="16.6%" class="p-2" align="center" style="border-top: 1px solid black;border-bottom: 1px solid black;"><a href="kontakkami.php" class="text-dark">Kontak Kami</a></td>
            <td width="16.6%" class="p-2" align="center" style="border-top: 1px solid black;border-bottom: 1px solid black;"><a href="aboutus.php" class="text-dark">About us</a></td>
        </tr>
    </table>
    <br>
    <div class="navs ml-4 position-fixed" style="opacity:1; z-index:2;">
        <a class="btn btn-outline-dark mt-4" href="#artikel" style="width:100%;border-radius:20px;">Artikel</a><br>
        <a class="btn btn-outline-dark mt-4" href="#event" style="width:100%;border-radius:20px;">Event</a><br>
        <a class="btn btn-outline-dark mt-4" href="#gallery" style="width:100%;border-radius:20px;">Galerry</a><br>
        <a class="btn btn-outline-dark mt-4" href="#klien" style="width:100%;border-radius:20px;">Klien</a><br>
        <a class="btn btn-outline-dark mt-4" href="#login" style="width:100%;border-radius:20px;">Login</a><br>
        <a class="btn btn-outline-dark mt-4" href="#sigin" style="width:100%;border-radius:20px;margin-left:25%;">Sign In</a><br>
        <a class="btn btn-outline-dark mt-4" href="#signup" style="width:100%;border-radius:20px;margin-left:25%;">Sign Up</a>
    </div>
    <br>
    <div class="container row" style="margin-left:10%">
        <div class="col-8 ml-5">
            <h1 style="font-size:85px;font-weight:1000;">
                WE LOVE OUR RIDE <br>
                WE LIKE TO RIDE <br>
                WE RIDE TILL WE DIE
            </h1>
        </div>
        <div class="col-4" style="margin-left:-15%;">
            <img src="assets/img/mongols.png" alt="">
        </div>
    </div>
    <br>
    <hr>
    <div class="container">
        <div id="artikel">
            <h1>Artikel</h1>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b>Jenis-jenis Motor dan Keunggulannya</b></h5>
                    <p class="card-text">Motor merupakan salah satu kendaraan paling populer di dunia. Ada beberapa jenis motor yang berbeda, seperti motor bebek...</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b>Teknologi Terkini dalam Industri Motor</b></h5>
                    <p class="card-text">Industri motor terus berkembang dengan pesat, dan teknologi terkini turut berkontribusi dalam meningkatkan kinerja, keamanan...</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b>Tips Aman Berkendara Motor di Jalan Raya</b></h5>
                    <p class="card-text">Keselamatan saat berkendara motor sangatlah penting. Beberapa tips untuk berkendara motor dengan aman di jalan raya antara lain memakai</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="card-deck mt-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b>Perawatan Berkala untuk Mempertahankan Kinerja Motor</b></h5>
                    <p class="card-text">Agar motor tetap beroperasi dengan baik, perawatan berkala sangatlah pent...</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b>Sejarah Perkembangan Sepeda Motor di Dunia</b></h5>
                    <p class="card-text">Sejak awal abad ke-20, sepeda motor telah mengalami perkembangan yang luar biasa. Awalnya dikenal sebagai sepeda dengan mesin bantu...</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title"><b>Keunggulan Motor Listrik dalam Lingkungan dan Ekonomi</b></h5>
                    <p class="card-text">Motor listrik semakin mendapatkan perhatian karena keunggulannya dalam hal lingkungan dan...</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div id="event">
            <h1>Event</h1>
            <div class="row">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/event.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Showcase Motor Custom</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/img/event1.webp" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ride Till Die Berbagi</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/event2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Touring</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="assets/img/event5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Biker's Night Out</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div id="gallery">
            <h1>Gallery Kami</h1>
            <div class="row">
                <div class="col-4 col-auto">
                    <img src="assets/img/gallery1.jpg" alt="" height="200">
                </div>
                <div class="col-4 col-auto">
                    <img src="assets/img/gallery2.jpg" alt="" height="200">
                </div>
                <div class="col-4 col-auto">
                    <img src="assets/img/gallery3.jpg" alt="" height="200">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 col-auto">
                    <img src="assets/img/mongolss.jpg" alt="" height="200">
                </div>
                <div class="col-4 col-auto">
                    <img src="assets/img/touring.jpg" alt="" height="200">
                </div>
                <div class="col-4 col-auto">
                    <img src="assets/img/touring2.jpg" alt="" height="200">
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div id="klien">
            <h1>Klien Kami</h1>
            <div class="row">
                <div class="col-4 col-auto">
                    <img src="assets/img/klien1.png" alt="" height="200">
                </div>
                <div class="col-4 col-auto">
                    <img src="assets/img/klien2.png" alt="" height="200">
                </div>
                <div class="col-4 col-auto">
                    <img src="assets/img/klien3.png" alt="" height="200">
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div id="login">
            <h1>Login</h1>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <input type="submit" class="form-control btn btn-primary" value="Login">
            </form>
        </div>
        <br>
        <hr>
        <div id="sigin">
            <h1>Sign In</h1>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <input type="submit" class="form-control btn btn-primary" value="Login">
            </form>
        </div>
        <br>
        <hr>
        <div id="signup">
            <h1>Sign Up</h1>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Lengkap</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Alamat Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Umur</label>
                    <input type="number" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Ulangi Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2">
                </div>
                <input type="submit" class="form-control btn btn-primary" value="Sign Up">
            </form>
        </div>
        <br>
    </div>
    <div class="container-fluid">
        <hr>
    </div>
    <div class="container">
        &copy; faturahman zulfi 2023
        <br>
        <br>
    </div>


    
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>