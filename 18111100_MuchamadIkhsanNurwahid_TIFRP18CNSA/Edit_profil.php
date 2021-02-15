<?php
include 'Profil.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Pendaftaran Mapala</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container-fluid">
             <!--Menu Bar-->
             <nav class="navbar  navbar-expand-md bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a rel="stylesheet" class="nav-link" href="#" style="font-weight: bold; color: gold;">Mapala Suraung STT Bandung</a>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a rel="styleheet" class="nav-link" href="Profil.php" style="color: gold;">Profilku</a>
                    </li>
                    <li class="nav-item">
                        <a rel="styleheet" class="nav-link" href="#" style="color: gold;">About</a>
                    </li>
                    <li class="nav-item">
                        <a rel="styleheet" class="nav-link" href="Login.html" style="color: gold;">Logout</a>
                    </li>
                </ul>
            </nav>

            <div class="card2">
                <form name="edit_profil" action="Profil.php"  onSubmit="return validasi()">
                    <div class="col-md-12">
                        <h1 style="text-align: center;" >Edit Profil</h1>
                        <p></p>
                        <label> Nama Lengkap </label>
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" placeholder="Nama Lengkap"/>
                        <p></p>
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggallahir" id="tanggallahir" class="form-control"/>
                        <p></p>
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan"  id = "pekerjaan" class="form-control" placeholder="Pekerjaan"/>
                        <p></p>
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
                        <p></p>
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                        <p></p>
                        <input class="btn btn-dark" type="submit" name="regist" value="Submit" style="color: whitesmoke ; margin-right: 10px;">
                        <a href="Login.html" class="btn btn-dark" role="button" style="color: whitesmoke;">Login</a>
                    </div>
                </form>
            </div>

            <footer>
                <center><p style="color: white;"> @copyright 18111100-Muchamad Ikhsan Nurwahid-TIFRP18CNSA</p></center>
                
            </footer>
        </div>
    </body>

    <script type="text/javascript">
        function validasi(){
            var namalengkap = document.getElementById("namalengkap").value;
            var tanggallahir = document.getElementById("tanggallahir").value;
            var pekerjaan = document.getElementById("pekerjaan").value;
            var email   = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (namalengkap != "" && tanggallahir != "" && pekerjaan != "" && email != "" && password != "") {
                return true;
            }else{
                alert("Mohon mengisi semua semua data !!! ")
            }
        }

    </script>
    </form>
</html>