
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
                <th>Tanggal</th>
                <th>File Final</th>
                <th>Record</th>
              </tr>
            </thead>
            <tbody>


              <?php foreach ($temp as $key) { $no++?>
                <tr class="gradeU">
                  <td colspan="" rowspan="" headers=""><?php echo $no; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $key['opd'] ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $key['judul']; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $key['tanggal'] ?></td>
                  <td colspan="" rowspan="" headers=""><center><a  target="_blank" href=<?php echo '"'.base_url('file/final/'.$key['file']).'"';?>><img width="50" height="50" src="<?php echo base_url ('assets/img/pdf.png') ?>" alt=""></a></center></td>
                  <td colspan="" rowspan="" headers=""><center><a href=<?php echo '"'.base_url('index.php/opd/dashboard/histori/'.$key['id']).'"';?> type="button" class="btn btn-success btn-md"><i class="glyphicon glyphicon-record" ></i></a></center></td>
                 <?php } ?>

          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
</div>