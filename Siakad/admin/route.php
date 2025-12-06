<?php

$p=$_GET['p'];

switch ($p) {
    case 'Dosen':
require_once "Dosen.php";
        break;

    case 'Pegawai':
require_once "Pegawai.php";
        break;
        
    case 'Mahasiswa':
require_once "Mahasiswa.php";
        break;
    
    case 'Administrasi':
require_once "Administrasi.php";
        break;

    case 'Bayar UKT':
require_once "Bayar UKT.php";
        break;
    
    case 'Pengisian KRS':
require_once "Pengisian KRS.php";
        break;

    case 'Nilai Mahasiswa':
require_once "Nilai Mahasiswa.php";
        break;
    
    case 'Ganti Password':
require_once "Ganti Password.php";
        break;

    case 'Dashboard Admin':
require_once "Dashboard Admin.php";
        break;

    case 'Tambah mahasiswa':
require_once "Tambah mahasiswa.php";
        break;

    case 'Detail-mhs':
require_once "Detail Mahasiswa.php";
        break;

    case 'Edit':
require_once "Edit-Mahasiswa.php";
        break;

    case 'hapus-mhs':
require_once "hapus-mahasiswa.php";
        break;

        case 'Tambah mahasiswa':
require_once "Tambah mahasiswa.php";
        break;

              case 'Dosen':
require_once "Dosen.php";
        break;

        case 'Detail-dosen':
require_once "Detail Dosen.php";
        break;

        case 'Edit-Dosen':
require_once "Edit-Dosen.php";
        break;

        case 'Tambah dosen':
require_once "Tambah dosen.php";
        break;

        case 'hapus-dosen':
require_once "hapus-dosen.php";
        break;

        case 'jadwal-dosen';
require_once "jadwal.php";  
        break;

        case 'konsultasi';
require_once "konsultasi.php";
        break;

        case 'pegawai':
require_once "Pegawai.php";
        break;

        case 'Detail-pegawai':
require_once "Detail Pegawai.php";
        break;

        case 'Edit-Pegawai':
require_once "Edit-Pegawai.php";
        break;

        case 'Tambah pegawai':
require_once "Tambah pegawai.php";
        break;

        case 'hapus-pegawai':
require_once "hapus-pegawai.php";
        break;

        case 'jadwal';
require_once "jadwal.php";  
        break;

        case 'konsultasi';
require_once "konsultasi.php";
        break;
    
    default:
require_once "Dashboard.php";
        break;
}