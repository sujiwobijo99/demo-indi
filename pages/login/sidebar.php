<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <?php
                        if ($_SESSION['foto']==NULL) { ?>
                            <img src="assets/img/user/user-13.jpg" alt=""/>   
                        <?php }else{ ?>
                            <img src="<?php echo base_url().'assets/img/user/'. $_SESSION['foto'];?>" alt="" />   
                        <?php } ?>
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <?php echo $_SESSION['nama_user'];?>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Edit Profile</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Navigasi</li>
            <p>Kelola Sumber Daya</p>
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index2.php"><i class="fa fa-th-large"></i> <span>Home</span></a>
            </li>
            <?php if ($_SESSION['role'] == 'admin') { ?>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'produk' ? 'active' : '' ?>">
                <a href="index2.php?m=barang&s=kelolaproduk"><i class="fab fa-product-hunt"></i> <span>Produk</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'user' ? 'active' : '' ?>">
                <a href="index2.php?m=user&s=user"><i class="fa fa-users"></i> <span>Kelola User</span></a>
            </li>
            <li class="nav-header">Kelola Website</li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'faq' ? 'active' : '' ?>">
                <a href="index2.php?m=faq&s=faq"><i class="fas fa-question"></i> <span>Faq</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'content' ? 'active' : '' ?>">
                <a href="index2.php?m=content&s=content"><i class="fa fa-book-open"></i> <span>Content</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'tvchanel' ? 'active' : '' ?>">
                <a href="index2.php?m=tvchanel&s=tvchanel"><i class="fa fa-tv"></i> <span>Tv Chanel</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'tvpaket' ? 'active' : '' ?>">
                <a href="index2.php?m=tvpaket&s=tvpaket"><i class="fa fa-tv"></i> <span>Tv Paket</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'orderan' ? 'active' : '' ?>">
                <a href="index2.php?m=orderan&s=orderan"><i class="fa fa-inbox"></i> <span>Pesanan</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'keluhan' ? 'active' : '' ?>">
                <a href="index2.php?m=keluhan&s=keluhan"><i class="fa fa-exclamation-circle"></i> <span>Keluhan</span></a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'ketersediaan' ? 'active' : '' ?>">
                <a href="index2.php?m=ketersediaan&s=ketersediaan"><i class="fa fa-boxes"></i> <span>Ketersediaan</span></a>
            </li>
            <?php } ?>
             <?php if ($_SESSION['role'] == 'user') { ?>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'produk' ? 'active' : '' ?>">
                <a href="index2.php?m=produkuser&s=produk"><i class="fa fa-file"></i> <span>Produk</span></a>
            </li>
            <li class="nav-header">Section Report</li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'laporan' ? 'active' : '' ?>">
                <a href="index2.php?m=laporan&s=laporan"><i class="fa fa-info"></i> <span>Informasi layanan</span></a>
            </li>
            <?php } ?>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->