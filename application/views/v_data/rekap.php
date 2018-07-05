<!DOCTYPE html>
<html lang="id"><head>
  <link rel="shortcut icon" href="<?php echo base_url() ;?>assets/img/logo_ntb_clear.png">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=21cm, initial-scale=1">
  <meta name="description" content="Sistem Informasi Akademik Universitas Mataram">
  <meta name="author" content="Universitas Mataram">
  <title>Rekap Histori Pengajuan SK</title>
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
        <center><strong><h2>Rekap Histori Pengajuan SK</h2></strong></center>
      
        <div class="col-md-12">

         <table class="table table-bordered">
           <thead>
            <tr>
              <th><center><strong>No</strong></center></th>
              <th><center><strong>OPD</strong></center></th>
              <th><center><strong>Nama SK</strong></center></th>
              <th><center><strong>Tanggal Proses</strong></center></th>
              <th><center><strong>Catatan</strong></center></th>
              <th><center><strong>Status Proses</strong></center></th>

            </tr>
          </thead>
          <tbody>
           <?php foreach ($cetak->result_array() as $key) {$no++?>
           <tr class="gradeU">
            <td><?php echo $no ?></td>
            <td><?php echo $key['sk_nama_opd'] ?></td>
            <td><?php echo $key['sk_judul'] ?></td>
            <td><?php echo $key['sk_tgl_proses'] ?></td>
            <td><?php echo $key['catatan'] ?></td>
            <td>
              <?php if ($key['sk_status']=='T'){?>
                       Pengajuan
              <?php }elseif($key['sk_status']=='P'){?>
                        Proses
              <?php }elseif ($key['sk_status']=='N') {?>
                       Tolak
              <?php }else{ ?>
                        Terima
              <?php } ?>
            </td>
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
