<?php 

include 'koneksi.php';
$nama=$_GET['nama'];
$jumlah=$_GET['jumlah'];
$status=$_GET['status'];

$query="INSERT INTO daftar_tamu(nama,jumlah,status) VALUES ('$nama','$jumlah','$status')";
$tambahdata=mysqli_query($koneksi,$query);
if($tambahdata){
    echo"<script>
    alert('data berhasil dikirim ke database')
    </script>";
}else{
    echo"<script>
    alert('data gagal dikirim ke database')
    </script>";
}

?>