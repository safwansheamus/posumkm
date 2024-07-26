<style>
    * {
        scroll-behavior: smooth;
    }
</style>

<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>products">Produk</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>c/<?= $product['slug']; ?>"><?= $product['name']; ?></a>
                </li>
                <li class="active"><?= $product['title']; ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="product-details-area padding-30-row-col pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="product-details-wrap">
                    <div class="product-details-wrap-top">
                        <div class="row">

                        <?php $setting = $this->db->get('settings')->row_array(); ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="product-details-slider-wrap">
                                    <div class="pro-dec-big-img-slider">
                                    
                                        <div class="single-big-img-style">
                                            <div class="pro-details-big-img">
                                                <a class="img-popup" href="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>">
                                                    <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="pro-details-badges product-badges-position">
                                                <span class="red">Sale !</span>
                                            </div>
                                        </div>

                                        <?php foreach($img->result_array() as $d): ?>
                                            <div class="single-big-img-style">
                                            <div class="pro-details-big-img">
                                                <a class="img-popup" href="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>">
                                                    <img src="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="pro-details-badges product-badges-position">
                                                <span class="red">Sale !</span>
                                            </div>
                                        </div>
                                         <?php endforeach; ?>

                                    </div>
                                    
                                    <div class="product-dec-slider-small product-dec-small-style1">

                                        <div class="product-dec-small">
                                            <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" alt="">
                                        </div>

                                    <?php foreach($img->result_array() as $d): ?>
                                        <div class="product-dec-small">
                                            <img src="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>" alt="">
                                        </div>
                                    <?php endforeach; ?>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product-details-content pro-details-content-pl">
                                    <h1> <?= $product['title']; ?></h1>
                                    <div class="pro-details-brand-review">
                                        <div class="pro-details-brand">
                                            <span> Produk dilihat : <a href="#"><?= $product['viewer']; ?></a></span>
                                        </div>
                                        <div class="pro-details-rating-wrap">
                                            <span> Produk Terjual : <?= $product['transaction']; ?></span>
                                            <div class="pro-details-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-price-short-description">
                                            <?php if($setting['promo'] == 1){ ?>
                                            <?php if($product['promo_price'] == 0){ ?>
                                                <div class="pro-details-price">
                                                    <span class="new-price">Rp <?= str_replace(",",".",number_format($product['price'])); ?></span>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="pro-details-price">
                                                    <span class="new-price">Rp <?= str_replace(",",".",number_format($product['promo_price'])); ?></span>
                                                    <span class="old-price">Rp <?= str_replace(",",".",number_format($product['price'])); ?></span>
                                                </div>
                                            <?php } ?>
                                            <?php }else{ ?>
                                                <tr>
                                                    <td class="t">Harga</td>
                                                    <td class="price">Rp <?= str_replace(",",".",number_format($product['price'])); ?></td>
                                                </tr>
                                            <?php } ?>

                                       
                                        <div class="pro-details-short-description">
                                            <p><?= word_limiter($product['description'], 15) ?> <a style="color:#1CCAA1 " href="#deskripsi">Lebih Lengkap</a> </p>
                                        </div>
                                    </div>

                                    <?php if($product['stock'] > 0){ ?>
                                    <div class="pro-details-quality-stock-area">
                                    <?php if($setting['promo'] == 1){ ?>
                                        <?php if($product['promo_price'] == 0){ ?>
                                            <?php $priceP = $product['price']; ?>
                                        <?php }else{ ?>
                                            <?php $priceP = $product['promo_price']; ?>
                                        <?php } ?>
                                        <?php }else{ ?>
                                            <?php $priceP = $product['price']; ?>
                                        <?php } ?>
                                        <div class="pro-details-quality-stock-wrap">
                                            
                                            <div class="pro-details-action-wrap">
                                                <div class="pro-details-action tooltip-style-4">
                                                    <button onclick="minusProduct(<?= $priceP; ?>)" aria-label="Kurang"><i class="fad fa-minus"></i> </button>
                                                </div>
                                            </div>

                                            <div class="pro-details-stock">
                                                <input disabled type="text" value="1" id="qtyProduct" class="valueJml" value="1" size="1" >
                                            </div>

                                            <div class="pro-details-action-wrap">
                                                <div class="pro-details-action tooltip-style-4">
                                                    <button onclick="plusProduct(<?= $priceP; ?>, <?= $product['stock']; ?>)" aria-label="Tambah"><i class="far fa-plus"></i> </button>
                                                </div>
                                            </div>
                                            <div class="pro-details-price-short-description">
                                            <div class="pro-details-price">
                                            <span class="new-price">Rp.</span><span id="detailTotalPrice" class="new-price"><?= str_replace(",",".",number_format($priceP)); ?></span>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                    <div class="pro-details-action-wrap">

                                    <?php if($product['stock'] > 0){ ?>
                                        <div class="pro-details-add-to-cart">
                                            <button onclick="buy()">Beli</button>
                                            <button class="mcp-btn_cart" onclick="addCart()">Tambah Keranjang</button>
                                        </div>
                                    <?php }else{ ?>
                                        <p class="btn btn-outline-secondary">Stok lagi kosong</p>
                                    <?php } ?>

                                        <!--
                                        <div class="pro-details-action tooltip-style-4">
                                            <button aria-label="Add To Wishlist"><i class="fad fa-heart"></i> </button>
                                            <button aria-label="Add To Compare"><i class="far fa-signal"></i> </button>
                                        </div>
                                        -->
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Stok : </span> <?= $product['stock']; ?></li>
                                            <li><span>Kondisi :</span> 
                                            <?php if($product['condit'] == 1){ ?>
                                                Baru
                                            <?php }else{ ?>
                                                Bekas
                                            <?php } ?> 
                                            </li>
                                            <li><span>Berat : </span> <?= $product['weight']; ?> Gram</li>
                                        </ul>
                                    </div>
                                    <div class="product-details-social tooltip-style-4">
                                        <a aria-label="Bagikan ke Facebook" class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a aria-label="Bagikan ke Twitter" class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                        <a aria-label="Bagikan ke Linkedin" class="linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                                        <a aria-label="Email" class="envelope" href="#"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-details-wrap-bottom">
                        <div class="product-details-description">
                            <div id="deskripsi" class="entry-product-section-heading">
                                <h2>Deskripsi Produk</h2>
                            </div>
                            <?= nl2br($product['description']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .mcp-btn_cart {
        color: #1CCAA1!important;
        border: 1px solid #1CCAA1!important;
        background-color: white!important;
    }
    .mcp-btn_cart:hover {
        background-color: #DC143C!important;
        border: 1px solid #DC143C!important;
        color: white!important;
    }
</style>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    function plusProduct(price, stock){
        let inputJml;
        inputJml = parseInt($("input.valueJml").val());
        inputJml = inputJml + 1;
        if(inputJml <= stock){
            $("input.valueJml").val(inputJml);
            const newPrice = inputJml * price;
            const rpFormat = number_format(newPrice);
            $("#detailTotalPrice").text(rpFormat.split(",").join("."));
        }
    }

    function minusProduct(price){
        let inputJml;
        inputJml = parseInt($("input.valueJml").val());
        inputJml = inputJml - 1;
        if(inputJml >= 1){
            $("input.valueJml").val(inputJml);
            const newPrice = inputJml * price;
            const rpFormat = number_format(newPrice);
            $("#detailTotalPrice").text(rpFormat.split(",").join("."));
        }
    }

    function number_format (number, decimals, decPoint, thousandsSep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        var n = !isFinite(+number) ? 0 : +number
        var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
        var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
        var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
        var s = ''

        var toFixedFix = function (n, prec) {
        var k = Math.pow(10, prec)
        return '' + (Math.round(n * k) / k)
            .toFixed(prec)
        }

        // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
        s[1] = s[1] || ''
        s[1] += new Array(prec - s[1].length + 1).join('0')
        }

        return s.join(dec)
    }

    function buy(){
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $product['productId']; ?>,
                qty: $("#qtyProduct").val()
            },
            success: function(data){
                location.href = "<?= base_url(); ?>cart"
            }
        })
    }

    function addCart(){
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $product['productId']; ?>,
                qty: $("#qtyProduct").val()
            },
            success: function(data){
                $(".navbar-cart-inform").html(`<i class="fa fa-shopping-cart"></i> Keranjang(<?= count($this->cart->contents()) + 1; ?>)`);
                swal({
                    title: "Berhasil Ditambah ke Keranjang",
                    text: `<?= $product['title']; ?>`,
                    icon: "success",
                    buttons: true,
                    buttons: ["Lanjut Belanja", "Lihat Keranjang"],
                    })
                    .then((cart) => {
                    if (cart) {
                        location.href = "<?= base_url(); ?>cart"
                    }
                });
            }
        })
    }

    // slider product
    const containerImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img");
    const jumboImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img img.jumbo-thumb");
    const jumboHrefImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img a");
    const thumbsImgProduct = document.querySelectorAll("div.wrapper div.top div.main-top div.img div.img-slider img.thumb");
    
    containerImgProduct.addEventListener('click', function(e){
        if(e.target.className == 'thumb'){
            jumboImgProduct.src = e.target.src;
            jumboHrefImgProduct.href = e.target.src;
            
            thumbsImgProduct.forEach(function(thumb){
                thumb.className = 'thumb';
            })
        }
    })

</script>
