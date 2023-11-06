<?php 
require 'funcion.php';

$k=$_GET["y"];

$array = query("SELECT * FROM jadwal WHERE ID = $k")[0];




 if(isset($_POST["t"])){


//       if(ubah($_POST)){
//          echo "
//          <script>
//                  alert('data berhasil diubah');
//                  document.location.href='index.php';
//             </script>";
//      }else{
//     echo'data gagal diubah';
//  } 

   mysqli_query($coon, "UPDATE jadwal SET
    PEMESAN = '$_POST[PEMESAN]' 
    WHERE ID = $k
    ");
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href='index.php';
    </script>
        ";
        mysqli_query($coon, "UPDATE jadwal SET
        PRODI = '$_POST[PRODI]' 
        WHERE ID = $k
        ");
            echo "
            <script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>
            ";
            mysqli_query($coon, "UPDATE jadwal SET
            RUANG LAB = '$_POST[RUANGLAB]' 
            WHERE ID = $k
            ");
            echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE jadwal SET
            HARI = '$_POST[HARI]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE jadwal SET
            TANGGAL PINJAM = '$_POST[TANGGALPINJAM]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE jadwal SET
            JAM MULAI = '$_POST[JAMMULAI]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon, "UPDATE jadwal SET
            JAM SELESAI = $_POST[JAMSELESAI]'
            WHERE ID = $k
            ");
            echo"
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
                </script>
                ";
                mysqli_query($coon, "UPDATE jadwal SET
            KETERANGAN = '$_POST[KETERANGAN]' 
            WHERE ID = $k
            ");
                echo "
                <script>
                alert('data berhasil diubah');
                document.location.href='index.php';
            </script>
                ";
                mysqli_query($coon,"UPDATE jadwal SET 
                PENANGGUNG JAWAB = '$_POST[JAWAB]'
                WHERE ID = $k
                ");
            
                   
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
          <span>ubah data</span>
          <h2>ubah data</h2>
          <p>Mengubah data peminjaman lab UPT Komputer</p>
        </div>
    <div class="container">
        <form class="from" action="" method="post">
            <input type="hidden" name="ID" value="<?php echo $array["ID"]?>"><br>
            <table cellpadding="5" cellspacing="0">
                <tbody>
            <tr>
          <td>  PEMESAN :</td><td><input type="text" name="PEMESAN" placeholder="pemesan" value="<?php echo $array["PEMESAN"]?>"></td>
          </tr>
          <tr>
           <td>PRODI :</td><td>
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
           <td> RUANG LAB :</td><td>
           <input type="text" name="RUANG LAB" placeholder="ruang lab" value="<?php echo $array["RUANG LAB"]?>">
           </td>
           </tr>
         <tr>
           <td> HARI:</td><td>
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
         <td> TANGGAL PINJAM :</td><td><input type="date" name="TANGGALPINJAM" placeholder="tanggal pinjam"  value="<?php echo $array["TANGGAL PINJAM"]?>"></td>
           </tr>
       
         <tr>
          <td> JAM MULAI :</td><td><input type="time" name="JAMMULAI" placeholder="jam mulai" value="<?php echo $array["JAM MULAI"]?>"></td>
           </tr>
        <tr>
          <td> JAM SELESAI :</td><td><input type="time" name="JAMSELESAI" placeholder="jam selesai" value="<?php echo $array["JAM SELESAI"]?>"></td>
           </tr>
        <tr>
          <td> KETERANGAN :</td><td><input type="text" name="KETERANGAN" placeholder="keterangan" value="<?php echo $array["KETERANGAN"]?>"></td>
           </tr>
         <tr>
           <td> PENANGGUNGJAWAB :</td><td><input type="text" name="JAWAB" placeholder="penanggung jawab"  value="<?php echo $array["PENANGGUNG JAWAB"]?>"></td>
           </tr>
        <tr>
           <td><button type="submit" name="t">Kirim</button>
           </tr>
           </body>
            </table>
        </form>
    </div>
</body>
</html>