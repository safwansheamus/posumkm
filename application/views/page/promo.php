


<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
    <div class="custom-container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="active">Kategori</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-30 pb-30">
    <div class="custom-container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="totall-product">
                        <p> Promo Terbaik <span>hanya untuk kamu</span></p>
                    </div>
                    <div class="sort-by-product-area">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span>Berakhir dalam <span id="countdownPromo"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="row">


                    <?php if($promo->num_rows() > 0){ ?>
                    <?php if($setting['promo'] == 1){ ?>
                   
                        <?php foreach($promo->result_array() as $p): ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12 col-sm-6">
                            <div class="single-product-wrap mb-50">
                                <div class="product-img-action-wrap mb-10">
                                    <div class="product-img product-img-zoom">
                                        <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
                                            <img class="default-img" src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt="">
                                            <img class="hover-img" src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
                                            <button aria-label="Lihat Produk"><i class="far fa-eye"></i></button>
                                        </a>
                                        <a target="_blank" href="https://wa.me/?phone=<?= $this->Settings_model->general()["whatsappv2"]; ?>&text=Halo%2C%20<?= $this->Settings_model->general()["app_name"]; ?>%20!%20Saya%20ingin%20tanya%20terkait%20Produk%20<?= $p['title']; ?>">
                                            <button aria-label="Tanya via WA"><i class="fab fa-whatsapp"></i></button>
                                        </a>
                                    </div>
                        
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="<?= base_url(); ?>p/<?= $p['slug']; ?>"><?= word_limiter($p['title'], 5) ?></a></h2>
                                    <?php if($setting['promo'] == 1){ ?>
                                    <?php if($p['promo_price'] == 0){ ?>
                                        <div class="product-price">
                                            <span>Rp. <?= str_replace(",",".",number_format($p['price'])) ?></span>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="product-price">
                                            <span class="new-price">Rp. <?= str_replace(",",".",number_format($p['promo_price'])) ?></span>
                                            <span class="old-price">Rp. <?= str_replace(",",".",number_format($p['price'])) ?></span>
                                        </div>
                                        <?php } ?>
                                        <?php }else{ ?>
                                            <div class="product-price">
                                            <span class="old-price">Rp. <?= str_replace(",",".",number_format($p['price'])) ?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    <?php }else{ ?>
                    <div class="countdown">
                        <p class="lead text-light"><i class="fa fa-fire-alt"></i> PROMO</span></p>
                    </div>
                    <div class="alert alert-warning mt-4">Upss.. Tidak ada promo untuk saat ini.</div>
                    <?php } ?>
                    <?php }else{ ?>
                    <div class="countdown">
                        <p class="lead text-light"><i class="fa fa-fire-alt"></i> PROMO</span></p>
                    </div>
                    <div class="alert alert-warning mt-4">Upss.. Tidak ada promo untuk saat ini.</div>
                    <?php } ?>


                    </div>
                
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper sidebar-wrapper-mr1">
                    <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-1 mb-20">
                        <h4 class="sidebar-widget-title">Best Deal </h4>
                        <div class="sidebar-brand-list">
                            <ul>
                                <li> <a href="<?= base_url(); ?>products?promo=true">Promo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-1 mb-20">
                        <h4 class="sidebar-widget-title">Kondisi </h4>
                        <div class="sidebar-brand-list">
                            <ul>
                                <li><a href="<?= base_url(); ?>products?condition=1">Baru</a></li>
                                <li><a href="<?= base_url(); ?>products?condition=2">Bekas</a></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget sidebar-widget-wrap sidebar-widget-padding-2 mb-20">
                        <h4 class="sidebar-widget-title">Kisaran Harga </h4>
                        <div class="price-filter">
                            <div class="price-slider-amount">
                            <form action="<?= base_url(); ?>products" method="get">
                                <input type="number" placeholder="Minimal" name="minprice">
                                <input type="number" placeholder="Maksimal" name="maxprice">
                                <button type="submit" class="btn btn-secondary btn-block btn-sm mt-2">Terapkan</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    
                 
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
   
</div>