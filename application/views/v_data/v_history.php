
<?php echo $this->session->flashdata('message');?>
<div class="row">
    <div class="col-lg-12">
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

                <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                         
                            <?php $no=0; foreach ($temp as $key) {$no++?>
                            <div class="vertical-timeline-block">
                                <?php if ($key['status']=='T') {?>
                                <div class="vertical-timeline-icon yellow-bg">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <?php }elseif ($key['status']=='P') {?>
                                <div class="vertical-timeline-icon navy-bg">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <?php }elseif($key['status']=='Y'){ ?>
                                <div class="vertical-timeline-icon blue-bg">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <?php }else{ ?>
                                <div class="vertical-timeline-icon red-bg">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <?php } ?>
                                

                                <div class="vertical-timeline-content">
                                    <h2><?php echo $key['judul']; ?></h2>
                                    <p><font color="red"><?php echo $key['catatan']; ?></font></p>
                                    <?php if ($key['file']!=NULL ) { ?>
                                        <a href=<?php echo '"'.base_url('file/final/'.$key['file']).'"';?> target="_blank" class="btn btn-sm btn-success"> Download document </a>
                                    <?php } ?>
                                    <span class="vertical-date">
                                        <br/>
                                        <?php if ($key['status']=='T') {?>
                                        <h4><b>PENGAJUAN</b></h4>
                                        <?php }elseif ($key['status']=='P') {?>
                                        <h4><b>PROSES</b></h4>
                                        <?php }elseif($key['status']=='Y'){ ?>
                                        <h4><b>SELESAI</b></h4>
                                        <?php }else{ ?>
                                        <h4><b>DI TOLAK</b></h4>
                                        <?php } ?>
                                        <small><?php echo $key['tgl'] ?></small>
                                    </span>
                                </div>
                            </div>
                        <?php } ?>

                           
                        </div>

            </div>
        </div>
    </div>
    <!-- FORM -->

                
    
    <!-- END FORM -->

</div>