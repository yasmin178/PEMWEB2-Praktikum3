<?php


   require_once 'validasi.php';

   
   if(!isset ($_POST ["submit"])){
    header("Location: index.php");
    exit;


   }
   
$proses = $_POST["submit"];
$nama = $_POST["nama"];
$mata_kuliah = $_POST["matakuliah"];
$nilai_praktikum1 = $_POST["praktikum1"];
$nilai_praktikum2 = $_POST["praktikum2"];
$nilai_praktikum3 = $_POST["praktikum3"];
$nilai_akhir = ($nilai_praktikum1 + $nilai_praktikum2 + $nilai_praktikum3) / 3;


echo 'Nama Siswa : ' . $nama;
echo '<br> Mata Kuliah : ' . $mata_kuliah;
echo '<br> Nilai Praktikum 1 :' . $nilai_praktikum1;
echo '<br> Nilai Praktikum 2 :' . $nilai_praktikum2;
echo '<br> Nilai Praktikum 3 :' . $nilai_praktikum3;

echo '<br> Nilai Akhir : ' . $nilai_akhir;
echo '<br> DINYATAKAN : ' . kelulusan($nilai_akhir);
echo '<br> GRADE : ' . grade($nilai_akhir);







?>