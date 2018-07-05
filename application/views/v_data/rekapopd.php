<!DOCTYPE html>
<html lang="id"><head>
  <link rel="shortcut icon" href="<?php echo base_url() ;?>assets/img/logo_ntb_clear.png">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=21cm, initial-scale=1">
  <meta name="description" content="Sistem Informasi Akademik Universitas Mataram">
  <meta name="author" content="Universitas Mataram">
  <title>Rekap Pengajuan SK OPD</title>
  <link rel="stylesheet" href="<?php echo base_url('') ?>assets/cetak/bootstrap.css">
  <!--<link rel="stylesheet" href="<?php echo base_url('') ?>assets/cetak/font-awesome.css">
 <link rel="stylesheet" href="<?php echo base_url('') ?>assets/cetak/style.css"> -->
 <link rel="stylesheet" href="<?php echo base_url('') ?>assets/cetak/print.css">
 <style type="text/css">


</style>
</head>

<body>
  <div class="container-fluid ">
    <div class="halaman cetak krs">
      <div class="row">
        <div id="header">
          <div id="logofakultas">
            <center>
              <img src="<?php echo base_url('') ?>assets/cetak/cop.png" class="img-responsive"  style="margin-top: 10px; height: 120px; width: 1000px;">
            </center>
            <br>
          </div>

        </div>
        <br><br><br><br>
        <center><strong><h2>Rekap Pengajuan SK OPD</h2></strong></center>
      
        <div class="col-md-12">

         <table class="table table-bordered">
           <thead>
            <tr>
              <th><center><strong>No</strong></center></th>
            <th><center><strong>Nama OPD</strong></center></th>
            <th><center><strong>Nama SK</strong></center></th>
            <th><center><strong>Tanggal Pengajuan</strong></center></th>
            <th><center><strong>Nama File 1</strong></center></th>
            <th><center><strong>Nama File 2</strong></center></th>
            <th><center><strong>Nama File 3</strong></center></th>

            </tr>
          </thead>
          <tbody>
           <?php foreach ($cetak->result_array() as $key) {$no++?>
           <tr class="gradeU">
            <td colspan="" rowspan="" headers=""><?php echo $no ?></td>
            <td colspan="" rowspan="" headers=""><?php echo $key['sk_nama_user']; ?></td>
            <td colspan="" rowspan="" headers=""><?php echo $key['sk_judul']; ?></td>
            <td colspan="" rowspan="" headers=""><?php echo $key['sk_tgl_pengajuan']; ?></td>
            <td colspan="" rowspan="" headers=""><?php echo $key['sk_file_pendukung']; ?></td>
            <td colspan="" rowspan="" headers=""><?php echo $key['sk_file_pendukung_2']; ?></td>
            <td colspan="" rowspan="" headers=""><?php echo $key['sk_file_pendukung_3']; ?></td>
          </tr>

<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url('') ?>assets/cetak/analytics.js" async=""></script>
<script type="text/javascript" src="<?php echo base_url('') ?>assets/cetak/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url('') ?>assets/cetak/jquery_002.js"></script>
<script type="text/javascript" src="<?php echo base_url('') ?>assets/cetak/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url('') ?>assets/cetak/ga.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
        // window.print();
      });
    </script>


  </body></html>
