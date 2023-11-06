<?php 
 require "funcion.php";
 $database = query('SELECT * FROM jadwal');
 
if(isset($_POST["keyword"])){
    $database=cari($_POST["keyword"]);
}
?>


<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index1.php#team?pesan=gagal");
	}

	?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjadwalan Lab UPT Komputer</title>
    
    <link href="assets/img/unipma.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <style>
    
        body{
            height: calc(100vh - 110px);
            background: url("../img/tembok.jpg") top center;
            background-size: cover;
            position: relative;
            width: 100%;
            min-height: 200px;
            overflow-x: hidden;
        }
        .data{
            position: relative;
            left: 48px;
        }
        .container table{
            margin: auto;
        }
        .mahok a{
            color: black;
        }.thead{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

<div class="section-title">
          <span>Schedule</span>
          <h2>Schedule</h2>
          <p>Jadwal penggunaan lab UPT Komputer </p>
        </div>

    <h4 class="mahok"><a href="logout.php">LOGOUT</a></h4>
    <div class="data">

    <h1><a href="tambah.php">Tambah Data</a></h1>
    <form action="" method="post">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    </div>
    <br>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead class="thead">
                <tr>
                    <th>NO</th>
                    <th>AKSI</th>
                    <th>PEMESAN</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>HARI</th>
                    <th>TANGGAL PINJAM</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                    <th>KETERANGAN</th>
                    <th>PENANGGUNG JAWAB</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                 <tr>
                    <td><?php echo $i ?></td>
                    <td><a href="ubah.php?y=<?php echo $dts["ID"]?>">Ubah |</a> 
                    <a href="hapus.php?x=<?php echo $dts["ID"]?>"> Hapus</a></td>
                <td><?php echo $dts["PEMESAN"] ?></td>
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["HARI"] ?></td>
                <td><?php echo $dts["TANGGAL PINJAM"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>
                <td><?php echo $dts["KETERANGAN"] ?></td>
                <td><?php echo $dts["PENANGGUNG JAWAB"] ?></td>
                </tr>
          
                <?php $i++; ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>