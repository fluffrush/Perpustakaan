<?php
if($_POST){
    $Judul_Buku=$_POST['Judul_Buku'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    if(empty($Judul_Buku)){
        echo "<script>alert('Judul Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($penulis)){
        echo "<script>alert('Penulis tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($penerbit)){
        echo "<script>alert('Penerbit tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {        
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (Judul_Buku,penulis,penerbit) value ('".$Judul_Buku."','".$penulis."','".$penerbit."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Buku <3');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Buku :(');location.href='tambah_buku.php';</script>";
        }
    }
}
?>