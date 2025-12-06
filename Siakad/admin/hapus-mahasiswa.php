<?php
$id = $_GET['id'] ?? null;

require_once "../config.php";

if ($id) {
    $sql = "DELETE FROM mhs WHERE id='$id'";
    $hasil = $db->query($sql);

    if ($hasil) {
        echo "<script>
            alert('Data Berhasil Dihapus');
            window.location.href='./?p=Mahasiswa';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus');
            window.location.href='./?p=Mahasiswa';
        </script>";
    }
} else {
    echo "<script>
        alert('ID tidak ditemukan');
        window.location.href='./?p=Mahasiswa';
    </script>";
}
?>
