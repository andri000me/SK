<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element"> <span>

              <img alt="image" class="img-circle" width="80px" height="80px" src= <?php echo '"'.base_url('assets/img/profile_small.jpg').'"';?>>


          </span>
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                <?php if ($level['level']==1) {
                  echo "Administrator";
                }elseif ($level['level']==2) {
                  echo "OPD";
                }else{
                     echo "Biro Hukum";
                }?>
            </strong>
        </span> <span class="text-muted text-xs block">Menu <b class="caret"></b></span> </span> </a>
        <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li class="divider"></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>
    <div class="logo-element">
        CSS
    </div>
</li>
<?php if ($level['level']==1) {?>
    <li>
    <a href="<?php echo base_url('index.php/portalredaktur/dashboard') ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
</li>
<li>
    <a href=""><i class="fa fa-file-text"></i> <span class="nav-label">Data Pengajuan SK</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('index.php/portalredaktur/dashboard/data_pengajuan_sk') ?>">Data Pengajuan</a></li>
    </ul>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Draft SK</a></li>
    </ul>
    
</li>
<li>
    <a href=""><i class="fa fa-flask"></i> <span class="nav-label">Master Data</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('index.php/portalredaktur/dashboard/data_opd') ?>">Data OPD</a></li>
    </ul>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data Histori</a></li>
    </ul>
   
</li>
<?php }elseif ($level['level']==2) {?>
            <li>
    <a href="<?php echo base_url('') ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
</li>
   <li>
    <a href="<?php echo base_url('index.php/opd/dashboard/form_pengajuan_sk') ?>"><i class="fa fa-plus"></i> <span class="nav-label">Pengajuan SK</span></a>
</li>

<li>
    <a href=""><i class="fa fa-file-text"></i> <span class="nav-label">Master Data</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data SK Pengajuan</a></li>
    </ul>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data SK Diterima</a></li>
    </ul>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data SK Ditolak</a></li>
    </ul>
   
  


        </li>
<?php }elseif ($level['level']==3) {?>
<li>
<a href="<?php echo base_url('') ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
</li>
<li>
    <a href=""><i class="fa fa-file-text"></i> <span class="nav-label">Data Pegawai</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data Pegawai</a></li>
    </ul>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data Pegawai Lanjutan</a></li>
    </ul>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Pegawai Non-Aktif</a></li>
    </ul>
</li>
<li>
    <a href=""><i class="fa fa-flask"></i> <span class="nav-label">Master Data</span> <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li><a href="<?php echo base_url('') ?>">Data Operasional</a></li>
    </ul>
</li>

<?php } ?>

    </ul>

</div>