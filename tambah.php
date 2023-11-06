<?php 
require "funcion.php";

if(isset($_POST["submit"])){

    if(tambah($_POST)){
        echo"
        <script>
    alert('data berhasil dimasukkan');
    document.location.href='index.php';
</script>
        ";
    }else{
        echo"
        gagal ditambah
        ";
    }
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
            background-color: ;
            width: 100%;
            min-height: 200px;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        .from{
            margin: 150px auto;
            width: 60%;
            border: 1px solid black;
            border-radius: 20px;
            padding: 50px;
            background-color: lightblue;
        }
        table{
            margin: auto;
        }
    </style>
</head>
<body>

<div class="section-title">
          <span>tambah data</span>
          <h2>tambah data</h2>
          <p>Menambah data peminjaman lab UPT Komputer</p>
        </div>
   
        <div class="container">
        <form class="from" action="" method="post">
        <h4 class="mahok"><a href="logout.php">LOGOUT</a></h4><br><br>
        <table  cellpadding="5" cellspacing="0">
            
            <tr>
           <td> PEMESAN : </td> <td> <input type="text" name="PEMESAN" placeholder="pemesan"></td>
            </tr>
            <tr>
          <td>  PRODI : </td> <td> 
            <select name="PRODI">
                <option>-pilih prodi-</option>
          <option>Pascasarjana Pendidikan Ilmu Pengetahuan Sosial</option>
          <option>Pascasarjana Pendidikan Ilmu Bahasa dan Sastra Indonesia</option>
          <option>Pendidikan Guru Sekolah Dasar</option>
          <option>Pendidikan Guru Pendidikan Anak Usia Dini</option>
          <option>Pendidikan Pancasila dan Kewarganegaraan</option>
          <option>Bimbingan Konseling</option>
          <option>Pendidikan Matematika</option>
          <option>Pendidikan Biologi</option>
          <option>Pendidikan Fisika</option>
          <option>Pendidikan Ekonomi</option>
          <option>Pendidikan Akuntansi</option>
          <option>Pendidikan Sejarah</option>
          <option>Pendidikan Bahasa dan Sastra Indonesia</option>
          <option>Pendidikan Bahasa Inggris</option>
          <option>Pendidikan Teknik Elektro</option>
          <option>Manajemen</option>
          <option>Akuntansi</option>
          <option>D-III Manajemen Pajak</option>
          <option>Sistem Informasi</option>
          <option>Teknik Informatika</option>
          <option>Teknik Industri</option>
          <option>Teknik Kimia</option>
          <option>Teknik Elektro</option>
          <option>Ilmu Keolahragaan</option>
          <option>Farmasi</option>
          <option>Hukum</option>
        </select>
    </td>
            </tr>
            <tr>
          <td> RUANG LAB : </td>  <td> <input type="text" name="RUANGLAB" placeholder="ruang lab">
      </td>
            </tr>
            <tr>
          <td> HARI : </td>  <td>
              <select name="HARI">
            <option>-pilih hari-</option>
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
            <option>Sabtu</option>
          </select>
          </td>
            </tr>
            <tr>
           <td> TANGGAL PINJAM :</td> <td><input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"></td>
            </tr>
            <tr>
           <td>JAM MULAI :</td>  <td><input type="time" name="JAMMULAI" placeholder="jam mulai"></td>
            </tr>
           <tr>
          <td> JAM SELESAI :</td> <td><input type="time" name="JAMSELESAI" placeholder="jam selesai"></td>
            </tr>
            <tr>
           <td>KETERANGAN :</td> <td><input type="text" name="KETERANGAN" placeholder="keterangan"></td>
            </tr>
            <tr>
          <td>  PENANGGUNG JAWAB :</td> <td> <input type="text" name="JAWAB" placeholder="penanggung jawab"></td>
            </tr>
            <tr>
          <td> <button type="submit" name="submit">Kirim</button></td> 
            </tr>
            </table>
        </form>
    </div>
</body>
</html>