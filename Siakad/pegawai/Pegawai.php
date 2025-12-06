<?php
require_once "../config.php";
$keyword = $_POST['keyword'];
$sql = "SELECT * from pegawai";
// session_start();

// if($_SESSION['isLogin']==false or $_SESSION['level']!="mhs"){
//     header("Location: ../logout.php");
// }

if ($_POST['tombolCari']) {
    if (!empty($keyword) and !empty($category)) {

        if ($category == "prodi") {
            if ($keyword == "INF") {
                $prodi = 1;
            } elseif ($keyword == "ARS") {
                $prodi = 2;
            } elseif ($keyword == "ILK") {
                $prodi = 3;
            }

            $sql = "select * from pegawai where $category like '%$prodi%'";
        } else {
            $sql = "select * from pegawai where $category like '%$keyword%'";
        }
    }
}



$data = $db->query($sql);
// var_dump($data);
?>


<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard Pegawai</h3>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard Pegawai</li>
                    </ol>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-12">
                    <!--begin::Card-->
                    <div class="card mt-4">
                        <!--begin::Card Header-->
                        <div class="card-header">
                            <!--begin::Card Title-->
                            <h3 class="card-title">Pegawai</h3>
                            <!--end::Card Title-->
                            <!--begin::Card Toolbar-->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-lte-toggle="card-remove"
                                    title="Remove"> 
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <!--end::Card Toolbar-->
                        </div>
                        <!--end::Card Header-->
                        <!--begin::Card Body-->
                        <div class="card-body">
                        <form method="post" action="#">
                            <table>
                                <tr>
                                    <td><input type="text" name="keyword" class="form-control" placeholder="Masukkan Kata Kunci..." style="width: 200px;" value="<?= $keyword ?>"></td>
                                    <td>
                                        <select name="category" id="" class="form-select form-select" aria-label="example">
                                            <option value="nidn" <?php if ($category == "nidn") echo "selected"; ?>>NI</option>
                                            <option value="nama" <?php if ($category == "nama") echo "selected"; ?>>Nama</option>
                                            <option value="gender" <?php if ($category == "gender") echo "selected"; ?>>Jenis Kelamin</option>                                        </select>
                                    </td>
                                    <td><input type="submit" class="btn btn-primary" value="cari" name="tombolCari"></td>
                                </tr>
                            </table>
                        </form>
                        
                        <table class="table table-striped table-hover">
                          <thead>
                          <tr>
                          <th>No</th>
                          <th>NI</th>
                          <th>Nama Pegawai</th>
                          <th>Jenis Kelamin</th>
                          </thead>
                          <tbody>
                          <?php
                          foreach ($data as $d) {
                          $nomor++;
                          if($d['matakuliah']==1){

                          $prodi="INF";
                          }elseif ($d['prodi']==2) {

                          $prodi="ARS";
                          }else{

                          $matakuliah="";
                          }
                          echo"<tr><td>$nomor</td><td>$d[nim]</td><td>$d[nama]</td><td>$d[gender]</td>

                          <td><a href='./?p=Detail-pegawai&id=$d[id]' class='btn btn-xs btn-info'>Detail</a>";
                          }
                          ?>
                          </tbody>
                          </table>

                        </div>
                        <!--end::Card Footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main> 