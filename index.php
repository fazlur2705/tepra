<?php
  include_once 'config/database.php';
  include_once 'config/fungsi_crud.php';
  include_once 'config/fungsi_realisasi.php';
  include_once 'view/header.php';

 ?>
    <body class="page-header-fixed page-horizontal-bar">
      <div class="menu-wrap">
    <?php
    include 'view/menuatas.php';
    @$modul = $_GET['modul'];
    switch ($modul) {
      case 'dataPendukung': $title = "Dashboard"; $sub_title = "Tambah Data"; $link = "#";
      $isi = "modul/dataPendukung.php"; break;

      case 'dataRealiasi': $title = "Dashboard"; $sub_title = "Detail Realisasi"; $link = "#";
      $isi = "modul/realisasi.php"; break;

      case 'grafik': $title = "Dashboard"; $sub_title = "Grafik Capaian Penyerapan"; $link = "#";
      $isi = "modul/garfik_capaian.php"; break;

      case 'formrealisasi': $title = "Dashboard"; $sub_title = "Form Realisasi Anggaran"; $link = "#";
      $isi = "modul/form_realisasi.php"; break;


      default:
      $title = "Dashboard Utama"; $sub_title = ""; $link = "#";
      $isi = "modul/dataPendukung.php";
      break;
    }
    ?>
      <div class="page-inner">
          <div class="page-title"> <h3><?= $title?></h3> <div class="page-breadcrumb"> <ol class="breadcrumb"> <li><a href="<?=$link?>"><?=$title?></a></li> <li class="active"><?=$sub_title?></li> </ol> </div> </div>

          <div id="main-wrapper">
              <div class="row">
                <?php include $isi; ?>
              </div><!-- Row -->
          </div><!-- Main Wrapper -->

      <?php include_once 'view/footer.php'; ?>
