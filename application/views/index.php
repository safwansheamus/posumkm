
        <?php if($promo->num_rows() > 0){ ?>

        <div class="product-area pt-40 pb-40">
        
        <?php if($setting['promo'] == 1){ ?>
            <div class="custom-container">
                <div class="product-area-border">
                    <div class="section-title-timer-wrap">
                        <div class="section-title-1">
                            <h2>Flash Sale!</h2>
                        </div>
                        <div class="timer-style-1">
                            <span>Berakhir Dalam:</span>
                            <span id="countdownPromo"></span>
                        </div>
                    </div>

                    <div class="product-slider-active-1 nav-style-2 product-hm1-mrg">

                    <?php foreach($getPromo->result_array() as $data): ?>

                    <?php  
                      // Menghitung Bar 
                      $s = $data['stock'];
                      $t = $data['transaction'];  
                      $f = $s - $t;
                      
                      if ($f < $s) {
                        $final = "100" ;
                      } elseif ($f > $s) {  
                        $final = "42" ;
                      } else {
                        $final = "6" ;
                      }
                    ?> 

                    <?php  
                      // Menghitung Persennya
                      // hl (harga lama) 
                      // hb (harga baru) 
                      $hl = $data['price']; 
                      $hb = $data['promo_price'];  
                      $ha = ($hb * 100) / $hl ;
                      $fha = 100 - $ha;
                    ?>   

                      <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-badges product-badges-mrg">
                                    <span class="discount red"><?= round($fha,1) ?>%</span>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="<?= base_url(); ?>p/<?= $data['slug']; ?>"><?= word_limiter($data['title'], 5) ?></a></h2>
                                    <div class="product-price">
                                        <span class="new-price">Rp. <?= str_replace(".",",",number_format($data['promo_price'])) ?></span>
                                        <span class="old-price">Rp. <?= str_replace(".",",",number_format($data['price'])) ?></span>
                                    </div>
                                </div>
                                <div class="product-img-action-wrap mb-20 mt-25">
                                    <div class="product-img product-img-zoom">
                                        <a href="<?= base_url(); ?>p/<?= $data['slug']; ?>">
                                            <img class="default-img" src="<?= base_url(); ?>assets/images/product/<?= $data['img'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a href="<?= base_url(); ?>p/<?= $data['slug']; ?>">
                                            <button aria-label="Lihat Produk"><i class="far fa-eye"></i></button>
                                        </a>
                                        <a target="_blank" href="https://wa.me/?phone=<?= $this->Settings_model->general()["whatsappv2"]; ?>&text=Halo%2C%20<?= $this->Settings_model->general()["app_name"]; ?>%20!%20Saya%20ingin%20tanya%20terkait%20Produk%20<?= $p['title']; ?>">
                                            <button aria-label="Tanya via WA"><i class="fab fa-whatsapp"></i></button>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-stock">
                                    <div class="status-bar">
                                        <div class="sold-bar sold-bar-width-<?= $final ?>"></div>
                                    </div>
                                    <div class="product-stock-status">
                                        <div class="sold stock-status-same-style">
                                            <span class="label">Terjual: </span>
                                            <span class="value"><?= $data['transaction']; ?></span>
                                        </div>
                                        <div class="available stock-status-same-style">
                                            <span class="label">Stok: </span>
                                            <span class="value"><?= $data['stock']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php }else{ ?>

            <?php } ?>
            <?php }else{ ?>

            <?php } ?>
        </div>


        <div class="banner-area pb-40">
            <div class="custom-container">
                <div class="row">

                <?php foreach($best3->result_array() as $b3): ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="<?= base_url(); ?>p/<?= $b3['slug']; ?>">
                                <img src="<?= base_url(); ?>assets/images/product/<?= $b3['img']; ?>" alt=""></a>
                            </div>
                            <div class="banner-content-1">
                                <span>Best Seller!</span>
                                <h2><?= $b3['title']; ?></h2>
                                <h3>Rp. <?= str_replace(",",".",number_format($b3['price'])) ?></h3>
                                <div class="btn-style-1">
                                    <a class="font-size-14 btn-1-padding-2" href="<?= base_url(); ?>p/<?= $b3['slug']; ?>">Lihat Produk </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>



                </div>
            </div>
        </div>

        <div class="categories-area pb-40">
            <div class="custom-container">
                <div class="section-title-1 mb-40">
                    <h2>Kategori Produk</h2>
                </div>
                <div class="categories-slider-1">
                    <?php foreach($categoriesLimit->result_array() as $c): ?>
                        <div class="product-plr-1" style="max-width:155px;" >
                            <div class="categories-wrap">
                                <div class="categories-img categories-img-zoom">
                                    <a href="<?= base_url(); ?>c/<?= $c['slug']; ?>">
                                    <img src="<?= base_url(); ?>assets/images/icon/<?= $c['icon']; ?>" alt=""></a>
                                </div>
                                <div class="categories-content text-center">
                                    <h3><a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"><?= $c['name']; ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <style>
            @media only screen and (max-width: 767px) {
                .custom-col-5 {
                        max-width: 50%!important;
                    }
            }

            .mcp-hover-img {
                animation: haunted 3s infinite;
            }
            @keyframes haunted {
                50% {
                    filter: saturate(40%);
                    -webkit-filter: saturate(40%);
                }
            }
        </style>

        <div class="product-area pb-20">
            <div class="custom-container">
                <div class="section-title-btn-wrap mb-40">
                    <div class="section-title-1">
                        <h2>Produk Terbaru</h2>
                    </div>
                    <div class="btn-style-2 mrg-top-xs">
                        <a href="<?= base_url(); ?>products">Lihat Semua <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row">
                <?php foreach($recent->result_array() as $p): ?>
                    <div class="custom-col-5">
                        <div class="single-product-wrap mb-50">
                            <div class="product-img-action-wrap mb-20">
                                <div class="product-img product-img-zoom">
                                    <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
                                        <img class="default-img" src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt="">
                                        <img class="hover-img mcp-hover-img" src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt="">
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
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class=" red">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="<?= base_url(); ?>p/<?= $p['slug']; ?>"><?= $p['title']; ?></a></h2>
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
                                        <span>Rp. <?= str_replace(",",".",number_format($p['price'])) ?></span>
                                    </div>
                                    
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

                

                 

        <div class="banner-area pb-40">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="<?= base_url(); ?>products"><img src="<?= base_url(); ?>assets/home/assets/images/banner/testers.png" alt=""></a>
                            </div>
                            <div class="banner-content-2">
                            <?php
                            $this->db->limit(1);
                            $this->db->order_by("price", "asc");
                            $pss= $this->db->get('products');
                            ?>
                                <h2>Dapatkan Produk Eksklusif!</h2>
                                <h3 class="d-none d-sm-block">Dengan Harga Terjangkau</h3>
                                <?php foreach($pss->result_array() as $pass): ?>
                                <h4>Mulai Rp. <?= str_replace(",",".",number_format($pass['price'])) ?>,-</h4>
                                <?php endforeach; ?>
                                <div class="btn-style-1">
                                    <a class="font-size-14 btn-1-padding-2" href="<?= base_url(); ?>products">Cek Sekarang </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="<?= base_url(); ?>products"><img src="<?= base_url(); ?>assets/home/assets/images/banner/promot.png" alt=""></a>
                            </div>
                            <div class="banner-content-3">
                                <span>Belanja sekarang</span>
                                <h2>Dapatkan potongan harga sampai</h2>
                                <?php
                                $this->db->limit(1);
                                $this->db->order_by('promo_price', 'desc');
                                $kisaranharga= $this->db->get('products');
                                ?>
                                <h4>
                                    <?php foreach($kisaranharga->result_array() as $kh): ?>
                                    Rp. <?= str_replace(",",".",number_format($kh['price'] - $kh['promo_price'])) ?> 
                                    <?php endforeach; ?> 
                                </h4>
                                <div class="btn-style-1">
                                    <a class="font-size-14 btn-1-padding-2" href="<?= base_url(); ?>promo">Lihat Promo </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-logo-area pb-35">
            <div class="custom-container">
                <div class="section-title-1 mb-30">
                    <h2>Kantor Pos Cabang Tasikmalaya 46100</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            <img src="<?= base_url(); ?>assets/home/assets/images/icon-img/poski.png" alt="Partner">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            <img src="<?= base_url(); ?>assets/home/assets/images/icon-img/posfins.png" alt="Partner">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            <img src="<?= base_url(); ?>assets/home/assets/images/icon-img/posprop.png" alt="Partner">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            <img src="<?= base_url(); ?>assets/home/assets/images/icon-img/dapenpos.png" alt="Partner">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            <img src="<?= base_url(); ?>assets/home/assets/images/icon-img/pospay.png" alt="Partner">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo mb-30">
                            <img src="<?= base_url(); ?>assets/home/assets/images/icon-img/bumn.png" alt="Partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="testimonial-area pb-40">
            <div class="custom-container">
                <div class="section-title-btn-wrap mb-35">
                    <div class="section-title-1">
                        <h2>Testimonial</h2>
                    </div>
                    <div class="btn-style-2 mrg-top-xs">
                        <a href="<?= base_url(); ?>testimoni">Lihat Testimoni <i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>

                <?php if($testi->num_rows() > 0){ ?>
                <div class="testimonial-active-1 nav-style-2 nav-style-2-modify-1">
                    <?php foreach($testi->result_array() as $data){ ?>
                        <div class="testimonial-plr-1">
                            <div class="single-testimonial">
                                <h4><?= $data['headline'] ?></h4>
                                <p><?= $data['content'] ?></p>
                                <div class="client-info">
                                    <h5><?= $data['name'] ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php }else{ ?>
                        <div class="alert alert-warning mt-4">Upss.. Belum ada testimoni</div>
                <?php } ?>   
                    

                </div>
            </div>
        </div>
       
    </div>
