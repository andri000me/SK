<?php echo $this->session->userdata('pesan') ?>


<div class="col-lg-12">
  <div class="ibox float-e-margins">
    <div class="ibox-title">
      <h5>Rekap Data Pengajuan OPD</h5>
      <div class="ibox-tools">
        <a class="collapse-link">
          <i class="fa fa-chevron-up"></i>
        </a>
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-wrench"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#">Config option 1</a>
          </li>
          <li><a href="#">Config option 2</a>
          </li>
        </ul>
        <a class="close-link">
          <i class="fa fa-times"></i>
        </a>
      </div>
    </div>
    <div class="ibox-content">


     <form role="form" enctype="multipart/form-data" method="POST" action="<?php echo base_url()."index.php/portalredaktur/dashboard/rekap_pengajuan"?>" class="form-horizontal form-label-left" novalidate>



      <div class="form-group">
        <label class="control-label col-md-1 col-sm-3 col-xs-6" >Nama OPD</label>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <select class="select2_group form-control" name="opd">

            <?php foreach ($opd as $key) {?>
              <option value="<?php echo $key['username'] ?>"><?php echo $key['sk_nama_user'] ?></option>
              option
            <?php } ?>


          </select>
        </div>
      </div>


      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-2 col-md-offset-1">
         
         
        <button type="submit" class="btn btn-primary">PROSES</button>  
            
        

        </div>
      </div>  

      <?php if ($tampil != NULL) {?>

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
       <tr>
         <?php foreach ($tampil->result_array() as $key ) {$no++?>
          <a href=<?php $data=$tampil->row(); $id=$data->username; echo '"'.base_url('index.php/portalredaktur/dashboard/download_rekap/'.$id).'"';?> type="button" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-download-alt" ></i></a>
          <td colspan="" rowspan="" headers=""><?php echo $no ?></td>
          <td colspan="" rowspan="" headers=""><?php echo $key['sk_nama_user']; ?></td>
          <td colspan="" rowspan="" headers=""><?php echo $key['sk_judul']; ?></td>
          <td colspan="" rowspan="" headers=""><?php echo $key['sk_tgl_pengajuan']; ?></td>
          <td colspan="" rowspan="" headers=""><?php echo $key['sk_file_pendukung']; ?></td>
          <td colspan="" rowspan="" headers=""><?php echo $key['sk_file_pendukung_2']; ?></td>
          <td colspan="" rowspan="" headers=""><?php echo $key['sk_file_pendukung_3']; ?></td>

         <?php } ?>
       </tr>
   </tbody>
   
 </table>

 <?php }else{ ?>
 <center><strong><font size="20px">DATA KOSONG</font></strong></center>
 <?php } ?>
</form>


</div>
</div>
</div>

















