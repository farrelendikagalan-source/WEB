<?php
$p=$_GET['p'];

switch ($p) {
        case 'Dosen':
require_once "Dosen.php";
        break;

        case 'Detail-dosen':
require_once "Detail Dosen.php";
        break;

        case 'jadwal-dosen';
require_once "jadwal.php";  
        break;

        case 'konsultasi';
require_once "konsultasi.php";
        break;

        default:
require_once "Dosen.php";
        break;

 }
?>


