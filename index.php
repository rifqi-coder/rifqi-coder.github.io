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
    <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>MI GUPPI CILENGKRANG</h3>
                </div>

                <ul class="list-unstyled komponen">
                    <p>Sistem Informasi Akademik Terpadu</p>
                    <li class="active">
                        <a href="index.php">HOME</a>
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
                        <ul class="nav navbar-nav ml-auto">
                          
                        </ul>
                    </div>
                </div>
            </nav>
            
	  	        <div class="img"><img src="img/bg.jpg"style="width: 1000px; 
                weight: 1000px"></div>
                  
          
        <div id="content">
            <div class="content">
            <h2>Sejarah Berdirinya MI GUPPI CILENGKRANG</h2>
            <p >MI GUPPI CILENGKRANG ini berdiri pada tahun 2007 dan sekolah ini didirikan oleh almarhum kakek saya yang bernama, Ustadz Amin Sanusi.Spd </p>
            <p>Beliau yang memprakarsai sehingga terbangunya sekolah ini, di awal perjuanganya beliau sangat berusaha kerja keras agar bisa mewujudkan mimpinya membuat sarana belajar agar ilmu yang beliau miliki, bisa berguna untuk generasi penerus beliau</p>
            <p>Seiring berjalanya waktu impian beliau terwujud untuk membuat sekolah, dan hingga saat ini telah terjadi pergantian Kepala sekolah sebanyak tiga kali

                Yang pertama memimpin MI GUPPI CILENGKRANG tentu saja beliau yakni, Bpk. Ustadz Amin Sanusi.Spd hingga tahun 2011 beliau pun memutuskan untuk pensiun
                
                Setelah beliau memutuskan untuk Pensiun lalu dilanjutkan oleh Bpk. Kusmayadi.Spd, beliau melanjutkan perjalanan Sekolah ini hingga tahun 2015.
                
                Setelah Bpk. Kusmayadi.Spd habis masa jabatan, lalu dilanjutkan oleh Bpk. Kaenudin.Spd Beliau melanjutkan dan meneruskan perjuangan para pendahulu nya untuk membuat sekolah ini bisa menjadi NEGERI hingga sekarang, Doakan saja agar Sekolah ini bisa cepat bisa Menjadi NEGERI </p>
                
                </div>
        </div>

            </div>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
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