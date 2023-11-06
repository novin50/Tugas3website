<?php 
$coon=mysqli_connect("localhost","root","","day");
function query($database){
    global $coon;
    $rows=[];
    $result=mysqli_query($coon,$database);
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    $nama=$data["PEMESAN"];
    $prodi=$data["PRODI"];
    $ruang=$data["RUANGLAB"];
    $hari=$data["HARI"];
    $tanggal=$data["TANGGALPINJAM"];
    $mulai=$data["JAMMULAI"];
    $selesai=$data["JAMSELESAI"];
    $keterangan=$data["KETERANGAN"];
    $penanggung=$data["JAWAB"];
    
    global $coon;
    $tambah="INSERT INTO jadwal VALUES
    ('','$nama','$prodi','$ruang','$hari','$tanggal','$mulai','$selesai','$keterangan','$penanggung')
    ";
    $result=mysqli_query($coon,$tambah);
    return $result;
}
function hapus($d){
    global $coon;

    $result=mysqli_query($coon,"DELETE FROM jadwal WHERE ID = $d");
    return $result;
}

function ubah($data){
    $nama=htmlspecialchars($data["PEMESAN"]);
    $prodi=htmlspecialchars($data["PRODI"]);
    $ruang=htmlspecialchars($data["RUANGLAB"]);
    $hari=htmlspecialchars($data["HARI"]);
    $tanggal=htmlspecialchars($data["TANGGALPINJAM"]);
    $mulai=htmlspecialchars($data["JAMMULAI"]);
    $selesai=htmlspecialchars($data["JAMSELESAI"]);
    $keterangan=htmlspecialchars($data["KETERANGAN"]);
    $penanggung=htmlspecialchars($data["JAWAB"]);
    $id=$data["ID"];
    global $coon;
    $result=mysqli_query($coon," UPDATE jadwal SET
    PEMESAN = '$nama',
    PRODI = '$prodi',
    RUANG LAB = '$ruang',
    HARI = '$hari',
    TANGGAL PINJAM = '$tanggal',
    JAM MULAI = '$mulai',
    JAM SELESAI = '$selesai',
    KETERANGAN = '$keterangan',
    PENANGGUNG JAWAB = '$penanggung',
    WHERE ID = $id
    ");
    return $result;
}

function cari($keyword){
    $quer="SELECT * FROM jadwal 
    WHERE
    PEMESAN LIKE '%$keyword%'
    ";
 return query($quer);
}
?>

