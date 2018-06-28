
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
                <th>File 1</th>
                <th>File 2</th>
                <th>File 3</th>
                <th>Status</th>
                <th>Catatan</th>
                <th>Aksi</th>
                

              </tr>
            </thead>
            <tbody>


              <?php foreach ($temp as $key) { $no++?>
                <tr class="gradeU">
                  <td colspan="" rowspan="" headers=""><?php echo $no; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $key['sk_nama_opd'] ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $key['sk_judul']; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $key['sk_tgl_pengajuan'] ?></td>
                  <td colspan="" rowspan="" headers=""><center><a href=<?php echo '"'.base_url('file/pengajuan/'.$key['sk_file_pendukung']).'"';?>><img width="50" height="50" src="<?php echo base_url ('assets/img/pdf.png') ?>" alt=""></center></a></td>
                  <td colspan="" rowspan="" headers=""><center><a href=<?php echo '"'.base_url('file/pengajuan/'.$key['sk_file_pendukung_2']).'"';?>><img width="50" height="50" src="<?php echo base_url ('assets/img/pdf.png') ?>"</center></a></td>
                  <td colspan="" rowspan="" headers=""><center><a  target="_blank" href=<?php echo '"'.base_url('file/pengajuan/'.$key['sk_file_pendukung_3']).'"';?>><img width="50" height="50" src="<?php echo base_url ('assets/img/pdf.png') ?>" alt=""></center></a></td>
                  <td colspan="" rowspan="" headers=""><center><a href="#" type="button" class="btn btn-warning btn-md">Proses</a></center></td>
                  <td colspan="" rowspan="" headers=""><center><a href="" data-toggle="modal" data-target="#tes" type="button" class="btn btn-success btn-md"><i class="glyphicon glyphicon-file" ></i></a></center></td>
                  <td colspan="" rowspan="" headers=""><center><a href="" data-toggle="modal" data-target="#<?php echo $key['sk_id_syarat']?>" type="button" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-pencil" ></i></a>
                  <a href=<?php echo '"'.base_url('index.php/opd/dashboard/delete_sk/'.$key['sk_id_syarat']).'"';?> class="btn btn-danger btn-md" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
                  </center>

                  </td>
                </tr>
                <!-- MODAL EDIT -->
                <div class="modal inmodal" id="<?php echo $key['sk_id_syarat']?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content animated flipInY">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">EDIT DATA PERMOHONAN SK</h4>
                        <small class="font-bold">Biro Hukum Provinsi NTB</small>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="ibox float-e-margins">

                              <div class="ibox-content">

                                <form method="post" action="<?php echo base_url('')?>index.php/opd/dashboard/update_sk" enctype="multipart/form-data">
                                  <div class="body">


                                    <div class="col-md-12">
                                    <input type="tex" name="id_sk" value="<?php echo $key['sk_id_syarat'] ?>" hidden="hidden">
                                     <div class="form-group col-md-12">
                                      <label class="col-md-6">Nama SK</label>
                                      <div class="input-group date col-sm-12">
                                        <span class="input-group-addon"><i class="fa fa-info"></i></span><input type="text" required="required" name="sk_judul" value="<?php echo $key['sk_judul'] ?>" class="form-control">
                                      </div>
                                    </div>      
                                    <div class="form-group col-md-12">
                                      <label class="col-md-6">Nama OPD</label>
                                      <div class="input-group date col-sm-12">
                                        <span class="input-group-addon"><i class="fa fa-info"></i></span><input type="text" required="required" disabled="disabled" name="" value="<?php echo $key['sk_nama_opd'] ?>" class="form-control">
                                      </div>
                                    </div>  
                                    <div class="form-group col-md-12">
                                      <label class="col-md-6">file pendukung 1</label>
                                      <div class="input-group date col-sm-12">
                                        <span class="input-group-addon"><i class="fa fa-upload"></i></span><input type="file"   name="file1" value="<?php echo $key['sk_nama_opd'] ?>" class="form-control">
                                      </div>
                                       <span class="help-block m-b-none"><font color="blue"><?php echo $key['sk_file_pendukung'] ?></font></span>
                                    </div> 
                                    <div class="form-group col-md-12">
                                      <label class="col-md-6">file pendukung 2</label>
                                      <div class="input-group date col-sm-12">
                                        <span class="input-group-addon"><i class="fa fa-upload"></i></span><input type="file"   name="file2" value="<?php echo $key['sk_nama_opd'] ?>" class="form-control">
                                      </div>
                                       <span class="help-block m-b-none"><font color="blue"><?php echo $key['sk_file_pendukung_2'] ?></font></span>
                                    </div> 
                                    <div class="form-group col-md-12">
                                      <label class="col-md-6">file pendukung 3</label>
                                      <div class="input-group date col-sm-12">
                                        <span class="input-group-addon"><i class="fa fa-upload"></i></span><input type="file"   name="file3" value="<?php echo $key['sk_nama_opd'] ?>" class="form-control">
                                      </div>
                                       <span class="help-block m-b-none"><font color="blue"><?php echo $key['sk_file_pendukung_3'] ?></font></span>
                                    </div>                                                 
                                  </div>    

                                </div>
                                <div class="modal-footer">
                                  <button type="Submit" class="btn btn-primary">UPDATE</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END MODAL -->
            <?php } ?>

          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
</div>