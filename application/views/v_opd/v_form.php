<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Pengajuan SK <small>Biro Hukum Prov NTB</small></h5>
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
               
                    <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url('index.php/opd/dashboard/tambah_data_pengajuan') ?>">
                
               
                 
                 
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Judul SK</label>
                        <div class="col-sm-10"><input type="text" name="sk_judul" placeholder="judul sk" class="form-control">
                        <span class="help-block m-b-none">nama yang diajukan</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">File Pendukung</label>
                         <div class="col-sm-5">
                            <input type="file" name="file1" placeholder="" class="form-control"><span class="help-block m-b-none">file pendukung 1</span>
                            <input type="file" name="file2" placeholder="" class="form-control"><span class="help-block m-b-none">file pendukung 2</span>
                            <input type="file" name="file3" placeholder="" class="form-control"><span class="help-block m-b-none">file pendukung 3</span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-white" type="submit">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>