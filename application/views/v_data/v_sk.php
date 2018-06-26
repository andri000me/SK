
<?php echo $this->session->flashdata('message');?>
<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Data Pengajuan SK</h5>
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

        <div class="table-responsive">
      

          <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
              <tr>
                <th>No</th>
                <th>Nama OPD</th>
                <th>Nama SK</th>
                <th>Tanggal Pengajuan</th>
                <th>File</th>
                <th>Status</th>
                <th>Catatan</th>
                <th>Finish</th>
                

              </tr>
            </thead>
            <tbody>
              

              
              <tr class="gradeU">
                <td colspan="" rowspan="" headers="">1</td>
                <td colspan="" rowspan="" headers="">Diskominfotik</td>
                <td colspan="" rowspan="" headers="">SK TIM SOP</td>
                <td colspan="" rowspan="" headers="">21-Januari-2018</td>
                <td colspan="" rowspan="" headers=""><center><img width="50" height="50" src="<?php echo base_url ('assets/img/pdf.png') ?>" alt=""></center></td>
                <td colspan="" rowspan="" headers=""><center><a href="#" type="button" class="btn btn-warning btn-md">Proses</a></center></td>
                <td colspan="" rowspan="" headers=""><center><a href="" data-toggle="modal" data-target="#tes" type="button" class="btn btn-success btn-md"><i class="glyphicon glyphicon-file" ></i></a></center></td>
                <td colspan="" rowspan="" headers=""><center><a href="" data-toggle="modal" data-target="#tes" type="button" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-download-alt" ></i></a></center></td>
              </tr>
                
              
      </tbody>
    </table>
  </div>

</div>
</div>
</div>
</div>