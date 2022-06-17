<?php
include "koneksi.php";
include "uploadfile.php";
$nama = $_POST['name'];
$id = $_POST['id'];
$lokasi = "upload/".$namafile;
$sql = "insert into dataku(id,nama,gambar) values('$id','$nama','$lokasi')";
$query = mysqli_query($konek, $sql);
if(isset($_POST['submit'])){
if ($query){
    echo "<script>alert('data berhasil disimpan')</script>";
    $upload = move_uploaded_file($tmpfile,$folder.$namafile);
    }else{
        echo "<script>alert('gagal tersimpan')</script>";
    }
}

?>
