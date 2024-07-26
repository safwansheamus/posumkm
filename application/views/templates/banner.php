<?php $banner = $this->Settings_model->getBanner(); ?>
<div class="slider-banner-area padding-10-row-col">
    <div class="custom-container">
        <div class="row">
              <div class="custom-common-column custom-column-width-66 custom-padding-5">
                  <div class="slider-area">
                      <div class="hero-slider-active-1 nav-style-1 nav-style-1-position-1">
                      
                          <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-end bg-img" style="background-image:url(<?= base_url(); ?>assets/home/assets/images/mainbanner.png);">
                              <div class="hero-slider-content-1 slider-animated-1">
                                <!-- Sesuaikan Color (Font) dengan Gambar Banner agar tampak lebih rapih -->
                                  <h1 style="color: #fffff" class="animated">Produk Terbaik dari<br><?= $this->Settings_model->general()["app_name"]; ?> </h1>
                                  <p  style="color: #fffff" class="animated">Dapatkan Produk dari kami dengan Harga yang cocok dan kualitas terbaik. Selamat Berbelanja!</p>
                                  <div class="btn-style-1">
                                      <a class="animated" href="<?= base_url(); ?>products"> Belanja Sekarang </a>
                                  </div>
                              </div>
                          </div>

                          
                        <?php foreach($banner->result_array() as $key): ?>
                          <a href="<?= $key['url'] ?>">
                            <div class="single-hero-slider single-animation-wrap slider-height-1 custom-d-flex custom-align-item-end bg-img" style="background-image:url(<?= base_url(); ?>assets/images/banner/<?= $key['img']; ?>);">
                            </div>
                          </a>
                        <?php endforeach; ?>
                        
                      </div>
                  </div>
            </div>            

            <div class="custom-common-column custom-column-width-33 custom-padding-5">
                <div class="banner-area banner-area-mt">
                    <div class="row">


                    <?php foreach($best2->result_array() as $b2): ?>
                    <div class="col-xl-12 col-lg-6 col-md-6 col-12 col-sm-12">
                        <div class="banner-wrap mb-10">
                            <div class="banner-img banner-img-zoom">
                                <a href="<?= base_url(); ?>p/<?= $b2['slug']; ?>">
                                <img src="<?= base_url(); ?>assets/images/product/<?= $b2['img']; ?>" alt=""></a>
                            </div>
                            <div class="banner-content-1">
                                <span>Best Deal</span>
                                <h2><?= $b2['title']; ?></h2>
                                <h3>Rp. <?= str_replace(",",".",number_format($b2['price'])) ?></h3>
                                <div class="btn-style-1">
                                    <a class="font-size-14 btn-1-padding-2" href="<?= base_url(); ?>p/<?= $b2['slug']; ?>">Lihat Produk </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>