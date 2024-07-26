
<?php
$categoriesLimit = $this->Categories_model->getCategoriesLimit();
$setting = $this->Settings_model->getSetting();
$sosmed = $this->Settings_model->getSosmed();
$footerhelp = $this->Settings_model->getFooterHelp();
$footerinfo = $this->Settings_model->getFooterInfo();
$rekening = $this->db->get('rekening');
 ?>


<div class="contact-area bg-gray-2">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 col-sm-6">
                <div class="single-contact-wrap text-center">
                    <h4>Alamat</h4>
                    <p> <?= nl2br($setting['address']); ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 col-sm-6">
                <div class="single-contact-wrap text-center">
                    <h4>Email</h4>
                    <p> <?= $this->Settings_model->general()["email_contact"]; ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 col-sm-6">
                <div class="single-contact-wrap text-center">
                    <h4>WhatsApp</h4>
                    <p> <?= $this->Settings_model->general()["whatsapp"]; ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12 col-sm-6">
                <div class="single-contact-wrap text-center">
                    <h4>Bantuan</h4>
                    <p> Siap melayani 24/7</p>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer-area pt-30 pb-35">
    <div class="custom-container">
        <div class="row">
            <div class="col-width-25 custom-common-column">
                <div class="footer-widget footer-about-2 mb-40">
                    <div class="footer-logo logo-width-1">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo']; ?>" alt="logo"></a>
                    </div>
                        <p><?= $setting['short_desc']; ?></p>
                    <div style="margin: 10px 0px;"  class="footer-social-icon tooltip-style-4">
                        <?php foreach($sosmed->result_array() as $s): ?>
                            <a aria-label="<?= $s['name']; ?>" class="<?= $s['name']; ?>" href="<?= $s['link']; ?>">
                                <i class="link-icon fab fa-<?= $s['icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <p>Copyright ©<span id="footer-cr-years"></span>. All rights reserved.</p>
                    </p>
                </div>
            </div>
            <div class="col-width-22 custom-common-column">
                <div class="footer-widget mb-40">
                    <h3 class="footer-title">Kategori</h3>
                    <div class="footer-info-list">
                        <ul>
                            <?php foreach($categoriesLimit->result_array() as $c): ?>
                                <li><a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"> <?= $c['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-width-22 custom-common-column">
                <div class="footer-widget mb-40">
                    <h3 class="footer-title">Halaman</h3>
                    <div class="footer-info-list">
                        <ul>
                            <?php foreach($footerinfo->result_array() as $f): ?>
                                <li><a href="<?= base_url(); ?><?= $f['slug']; ?>"> <?= $f['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-width-31 custom-common-column">
                <div class="footer-widget mb-40">
                    <h3 class="footer-title">Pembayaran Bisa Pakai Pospay</h3>
                    <div class="app-visa-wrap">
                       <!-- <div class="search-style-1 d-none d-lg-block pb-30">
                            <form action="<?= base_url(); ?>subscribe-email">
                                <input type="text" name="email" autocomplete="off" placeholder="Masukan Email">
                                <button type="submit"> <i class="far fa-paper-plane"></i> </button>
                            </form>
                        </div> -->
                        <!-- <p>Metode Pembayaran</p> -->
                        <div class="payment-img">
                            <a href="#"><img src="<?= base_url(); ?>assets/home/assets/images/icon-img/pospaylogo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo']; ?>" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children">
                            <a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Kategori</a>
                            <ul class="dropdown">
                            <?php $categories = $this->Categories_model->getCategories(); ?>
                                <?php foreach($categories->result_array() as $cat): ?>
                                    <li><a href="<?= base_url(); ?>c/<?= $cat['slug']; ?>"><?= $cat['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="<?= base_url(); ?>products">Produk</a></li>
                        <li><a href="<?= base_url(); ?>about">Tentang Kami</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info">
                    <a href="#"><?= $this->Settings_model->general()["whatsapp"]; ?></a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <?php foreach($sosmed->result_array() as $s): ?>
                  <a class="<?= $s['icon']; ?>" href="<?= $s['link']; ?>" target="_blank" title="<?= $s['name']; ?>">
                      <i class="fab fa-<?= $s['icon']; ?>"></i>
                  </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

    <script src="<?= base_url(); ?>assets/home/assets/js/vendor/vendor.min.js"></script>

    <script src="<?= base_url(); ?>assets/home/assets/js/plugins/pluginsnew.js"></script>
    
    <!-- Main JS -->
    <script src="<?= base_url(); ?>assets/home/assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.countdown.min.js"></script>
    <script>

        $("i.icon-search-navbar").on('click', function(){
            $("div.search-form").slideDown('fast');
            $("div.search-form input").focus();
        })

        $("div.search-form i").on('click', function(){
            $("div.search-form").slideUp('fast');
        })

        const years = new Date().getFullYear();
        $("#footer-cr-years").text(years);

        $("#countdownPromo").countdown({
            date: "<?= $setting['promo_time']; ?>",
            render: function (data) {
                var el = $(this.el);
                el.empty()
                .append(
                    this.leadingZeros(data.days, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.hours, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.min, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.sec, 2)
                );
            },
        });

        //loading screen
        $(window).ready(function(){
            $(".loading-animation-screen").fadeOut("slow");
        })

        // detail
        $("#detailBtnPlusJml").click(function(){
            var val = parseInt($(this).prev('input').val());
            $(this).prev('input').val(val + 1).change();
            return false;
        })

        $("#detailBtnMinusJml").click(function(){
            var val = parseInt($(this).next('input').val());
            if (val !== 1) {
                $(this).next('input').val(val - 1).change();
            }
            return false;
        })

    </script>
</html>
