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
    <div class="container" style="margin-left:10%">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <h1>Kontak Kami</h1>
                </div>
                <div class="row mt-3">
                    <img src="assets/img/phone-call.png" alt="" height="25" class="mr-3"><span style="font-size:20px">081377301308</span>
                </div>
                <div class="row mt-2">
                    <img src="assets/img/envelope.png" alt="" height="25" class="mr-3"><span style="font-size:20px">ridetilld1e@gmail.com</span>
                </div>
                <div class="row mt-2">
                    <img src="assets/img/instagram.png" alt="" height="25" class="mr-3"><span style="font-size:20px">@ridetilldie</span>
                </div>
                <div class="row mt-2">
                    <img src="assets/img/marker.png" alt="" height="25" class="mr-3"><span style="font-size:20px">Jalan Kenangan No.121, Medan</span>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <h1>Hubungi Kami</h1>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Anda">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Telepon Anda">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Pesan Anda" id="" cols="20" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary">Kirim Pesan</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>