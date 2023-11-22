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
        <h1>Produk Kami</h1>
    
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/vest-solid.svg" alt="" height="70">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">Tempa Rompi Club</h5>
                                <p class="card-text">Menyediakan jasa tempa rompi untuk klub motor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/motorcycle-solid.svg" alt="" height="70" style="margin-left:-30%">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">Jual Beli Motor</h5>
                                <p class="card-text">Melayani jual beli motor baru dan bekas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/hands-bubbles-solid.svg" alt="" height="70" style="margin-left:-30%">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">Cuci Motor</h5>
                                <p class="card-text">Menyediakan jasa cuci motor besar dan kecil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/screwdriver-wrench-solid.svg" alt="" height="70" style="margin-left:-30%">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title">Custom Motor</h5>
                                <p class="card-text">Menyediakan jasa custom motor besar dan kecil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>