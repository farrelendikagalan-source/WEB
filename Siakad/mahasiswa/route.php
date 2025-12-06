<?php
$p=$_GET['p'];

switch ($p) {
        case 'Mahasiswa':
require_once "Mahasiswa.php";
        break;

        case 'Detail-mhs':
require_once "Detail Mahasiswa.php";
        break;

        case 'jadwal-mhs';
require_once "jadwal.php";  
        break;

        case 'konsultasi';
require_once "konsultasi.php";
        break;

        default:
require_once "mahasiswa.php";
        break;

 }
?>


