<?php
$p=$_GET['p'];

switch ($p) {
        case 'pegawai':
require_once "Pegawai.php";
        break;

        case 'Detail-pegawai':
require_once "Detail Pegawai.php";
        break;

        case 'jadwal';
require_once "jadwal.php";  
        break;

        case 'konsultasi';
require_once "konsultasi.php";
        break;

        default:
require_once "pegawai.php";
        break;

 }
?>


