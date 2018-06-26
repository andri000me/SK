
<?php echo $this->session->flashdata('message');?>
<div class="row">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Data User SI-PSK</h5>
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
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>                                
                            </tr>
                        </thead>
                        <tbody>

                                <?php 
                                $no=0;
                                foreach ($tamp as $key) { $no++?>
                                 <tr class="gradeU">
                                <td><?php echo $no; ?></td>
                                <td><?php echo $key['sk_nama_user']; ?></td>
                                <td><?php echo $key['username']; ?></td>
                                <td><?php echo $key['password']; ?></td>
                            
                                
                                <td>
                                    <center>
                                   <!-- MODAL EDIT -->
                                   <a href="" data-toggle="modal" data-target="#<?php echo $key['sk_id_user'] ?>" type="button" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-pencil" ></i></a>

                                    <div class="modal inmodal" id="<?php echo $key['sk_id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content animated flipInY">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">FORM DATA OPD</h4>
                                                    <small class="font-bold">Biro Hukum Provinsi NTB</small>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ibox float-e-margins">

                                                                <div class="ibox-content">

                                                <form method="POST" class="form-horizontal" name="formtambah" action="<?php echo base_url('')?>index.php/portalredaktur/dashboard/update_opd">
                                                    <div class="body">
                                                         <input type="text" name="id" hidden="hidden" value="<?php echo $key['sk_id_user'] ?>">

                                                        <div class="col-md-12">

                                                            <div class="form-group col-md-12">
                                                                <label class="col-md-6">Nama OPD</label>
                                                                <div class="input-group date col-sm-12">
                                                                    <span class="input-group-addon"><i class="fa fa-info"></i></span><input type="text" name="1"required="required" value="<?php echo $key['sk_nama_user'] ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label class="col-md-6">Username</label>
                                                                <div class="input-group date col-sm-12">
                                                                    <span class="input-group-addon"><i class="fa fa-info"></i></span><input type="text" name="2" required="required" class="form-control" value="<?php echo $key['username'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label class="col-md-6">password</label>
                                                                <div class="input-group date col-sm-12">
                                                                    <span class="input-group-addon"><i class="fa fa-info"></i></span><input type="password" name="3" required="required" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            

                                                        </div>                                                  
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="Submit" class="btn btn-primary">Save changes</button>
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
                                   <!-- END -->
                                    <a href=<?php echo '"'.base_url('index.php/portalredaktur/dashboard/delete_opd/'.$key['sk_id_user']).'"';?> onclick="return confirm('Apakah anda ingin menghapus ?')"  type="button" class="btn btn-danger btn-md hapus"><i class="glyphicon glyphicon-trash" ></i></a>
                                </center> 
                                </td>
                                
                                </tr>
                                <?php } ?>
                            
                        </tbody>
                    
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- FORM -->

  <div class="col-lg-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Tambah OPD <small>Biro Hukum Prov NTB</small></h5>
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
                <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url(''); ?>index.php/portalredaktur/dashboard/tambah_data_opd">
                 
                    <div class="form-group"><label class="col-sm-2 control-label">Nama Instansi</label>

                        <div class="col-sm-10"><input type="text" name="1" required="required" placeholder="Nama Instansi" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10"><input type="text" name="2" placeholder="Username" required="required" class="form-control"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Password</label>
                         <div class="col-sm-10"><input type="password" name="3" placeholder="Password" required="required" class="form-control"></div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>               
    
    <!-- END FORM -->

</div>