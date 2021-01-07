<?php
include("koneksi.php");

?>

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
                        <ul class="judul">
                            <p>MI GUPPI CILENGKRANG</p>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1>DATA SISWA MI GUPPI CILENGKRANG</h1>

<form action="datasiswa.php" method="get">
<label>Masukan NIS anda :</label>
<input type="text" name="cari">
<input type="submit" value="cari">
</form>

<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table width='80%' border=1>


<thead><th>NIS</th> <th>NAMA SISWA</th> <th>JENIS KELAMIN</th> <th>ALAMAT</th><th>TANGGAL LAHIR</th><th>NAMA AYAH</th><th>NAMA IBU</th></thead>    
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $result = mysqli_query($conn,"select * from data_siswa where nis like '%".$cari."%'");				
    }else{
        $result = mysqli_query($conn, "SELECT * FROM data_siswa ORDER BY nis DESC");
         
 }

while($user_data = mysqli_fetch_array($result)){ 
    ?>
<tr>    
    <td><?php echo $user_data['nis'];?></td>
    <td><?php echo $user_data['nama_siswa'];?></td>
    <td><?php echo $user_data['jk'];?></td>
    <td><?php echo $user_data['alamat'];?></td> 
    <td><?php echo $user_data['ttl'];?></td>   
    <td><?php echo $user_data['nama_ayah'];?></td>
    <td><?php echo $user_data['nama_ibu'];?></td>
   
<?php } ?>
</table>
            
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