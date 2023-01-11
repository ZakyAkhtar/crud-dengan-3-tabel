<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $no=$_POST['no'];
    $nama=$_POST['nama'];
    $kelas=$POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];
    
    $sql = "INSERT INTO tb_siswa "
}