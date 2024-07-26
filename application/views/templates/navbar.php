<?php
$settingss = $this->db->get('settings')->row_array();
?>

<header class="header-area header-height-1">
    <div class="header-top header-top-ptb-1 border-bottom-1 d-none d-lg-block bg-gray-2">
        <div class="custom-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="covid-update">
                        <p><a href="#">INFO</a> Selamat Datang Di Pos Gema UMKM</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-info header-info-right">
                        <ul>
                            <li><a href="https://wa.me/?phone=<?= $this->Settings_model->general()["whatsappv2"]; ?>&text=Halo%2C%20<?= $this->Settings_model->general()["app_name"]; ?>%20!"><i class="info-icon fas fa-phone"></i> <?= $this->Settings_model->general()["whatsappv2"]; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar sticky-white-bg">
        <div class="custom-container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo/<?= $settingss['logo']; ?>" alt="logo"></a>
                </div>
                <div class="main-menu main-menu-padding-1 main-menu-lh-1 d-none d-lg-block hover-boder">
                    <nav>
                        <ul>
                            <li><a href="<?= base_url(); ?>">Beranda</a></li>
                            <li><a href="#">Kategori <i class="fa fa-chevron-down"></i></a>
                                <?php $categories = $this->Categories_model->getCategories(); ?>
                                <ul class="sub-menu">
                                    <?php foreach($categories->result_array() as $cat): ?>
                                        <li><a href="<?= base_url(); ?>c/<?= $cat['slug']; ?>"><?= $cat['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="<?= base_url(); ?>products">Produk</a></li>
                            <li><a href="<?= base_url(); ?>about">Tentang Kami</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-action-right">
                    <div class="header-action">
                        <div class="header-action-icon">
                            <a class="search-active" href="#"><i class="far fa-search"></i></a>
                        </div>
                        <div class="header-action-icon header-action-mrg-none">
                            <a href="#">

                                <?php if($this->cart->total_items() > 0){ ?>
                                  <i class="far fa-shopping-bag"></i>
                                  <span class="pro-count blue"><?= count($this->cart->contents()); ?></span>
                              <?php }else{ ?>
                                  <i class="far fa-shopping-bag"></i>
                                  <span class="pro-count blue">0</span>
                              <?php } ?>
                          </a>
                          <div class="cart-dropdown-wrap">
                            <ul>
                                <?php if($this->cart->total_items() > 0){ ?>
                                    <?php foreach($this->cart->contents() as $item): ?>

                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="<?= base_url(); ?>p/<?= $item['slug']; ?>">
                                                    <img alt="" src="<?= base_url(); ?>assets/images/product/<?= $item['img']; ?>"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="<?= base_url(); ?>p/<?= $item['slug']; ?>"><?= word_limiter($item['name'], 2) ?></a></h4>
                                                    <h3><span><?= $item['qty']; ?> × </span>Rp <?= number_format($item['subtotal'],0,",","."); ?></h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="<?= base_url(); ?>cart/delete/<?= $item['rowid']; ?>" onclick="return confirm('Yakin ingin menghapus produk ini dari troli?')"><i class="far fa-times"></i></a>
                                                </div>

                                            </li>

                                            <hr>
                                        <?php endforeach; ?>
                                    <?php }else{ ?>
                                        <div class="alert alert-warning">Keranjang belanja masih kosong</div>
                                    <?php } ?>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-button">
                                        <a href="<?= base_url(); ?>payment">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class="header-action-icon d-block d-lg-none">
                            <div class="burger-icon">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                        -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- search start -->
<div class="search-popup-wrap main-search-active">
    <div class="mobile-menu-close close-style-wrap">
        <button class="close-style search-close">
            <i class="icon-top"></i>
            <i class="icon-bottom"></i>
        </button>
    </div>
    <div class="search-popup-content">
        <form class="search-popup-form" action="<?= base_url(); ?>search" method="get" >
            <input type="text" autocomplete="off" name="q" placeholder="Cari Produk..">
        </form>
    </div>
</div>

