<div class="col-md-12">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title"><?="TAMBAH DATA REALISASI ANGGARAN"; ?></h4>
        </div>
        <div class="panel-body">
            <form class="form-inline" action="?modul=dataPendukung&aksi=proses" method="post">
                <div class="form-group">

                    <select class="form-control" name="">
                      <option value="">Program / Kegiatan</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  name="nip" placeholder="Kode Program">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control"  name="nik" placeholder="PAGU AWAL">
                </div>
                <div class="form-group">

                    <input type="text" class="form-control"   name="tlp" placeholder="PENYERAPAN">
                </div>


                <button type="submit" class="btn btn-info" name="addpejabat">Update Realisasi</button>
            </form>
        </div>
    </div>
</div>

    <div class="col-md-12">
        <div class="panel panel-white">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">List Detail Realisasi</h4>
            </div>
            <div class="panel-body">
               <div class="table-responsive">
                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Program</th>
                            <th>Kegiatan</th>
                            <th>Nama</th>
                            <th>Sumber Dana</th>
                            <th>Tahapan </th>
                            <th>Pagu </th>
                            <th>HPS </th>
                            <th>Nilai Kontrak </th>
                            <th>Sisa Pagu </th>
                            <th>R. Fisik </th>
                            <th>R. Keuangan </th>
                            <th> </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>02</td>
                            <td>07</td>
                            <td>Pengadaan Filling Kabinet</td>
                            <td>APBK</td>
                            <td>14.375.000</td>
                            <td>14.375.000</td>
                            <td>-</td>
                            <td>14.375.000</td>
                            <td>-</td>
                            <td>0%</td>
                            <td>-</td>
                            <td><button type="button" class="btn btn-sm btn-info">Detail </button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>02</td>
                            <td>07</td>
                            <td>Pengadaan AC 2 PK</td>
                            <td>APBK</td>
                            <td>19.875.000</td>
                            <td>19.875.000</td>
                            <td>-</td>
                          <td>19.875.000</td>
                            <td>-</td>
                            <td>0%</td>
                            <td>-</td>
                            <td><button type="button" class="btn btn-sm btn-info">Detail </button></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

<script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
<script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
<script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="assets/js/pages/table-data.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
