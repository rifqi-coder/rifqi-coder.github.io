<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SIKADU</title>
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MI GUPPI CILENGKRANG</h3>
            </div>

            <ul class="list-unstyled komponen">
                <p>Sistem Informasi Akademik Terpadu</p>
                <li class="active">
                    <a href="index.php" >HOME</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">AKADEMIK</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="akademik.php">DAFTAR NILAI</a>
                        </li>
                        <li>
                            <a href="datasiswa.php">DATA SISWA</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
            <ul class="list-unstyled sdbawah">
                <li>
                    <a href="login.php" class="download">Log Out</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Minimize Menu</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     </div>
                </div>
            </nav>
            <h1> Contact </h1>

            <p>Email            : frifqi50@gmail.com</p>
            <p>Telepon/Whatsapp : AN Muhammad Rifqi Fauzan : 085345185014</p>
            <p>Facebook         : <a href="https://www.facebook.com/rifqi.fauzan.315865/">Rifqi Fauzan</a></p>
            <p>Instragam        : <a href="https://www.instagram.com/noiseeeeeee_/">@noiseeee_</a></p>
            
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>