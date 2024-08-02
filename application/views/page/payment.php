<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
    <div class="custom-container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="<? base_url(); ?>">Home</a>
                </li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>

<form action="<?= base_url(); ?>payment/succesfully" method="post">
        <div class="checkout-area pt-30 pb-30">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7">
                        
                        <div class="customer-zone padding-20-row-col mb-30">
                            <div class="checkout-login-info">
                                <p>Jika telah melakukan Checkout tetapi tidak terkirim ke Whatsapp, pastikan "Alamat Lengkap" ditulis tanpa "Enter" / "Garis Baru".</p>
                                <p>Karena "Pos UMKM" masih dalam tahap pengembangan, Hanya gunakan Pos Indonesia untuk Proses pengirimannya ya kak</p>
                                <p>Punya kendala lainnya? Hubungi Admin <?= $this->Settings_model->general()["app_name"]; ?> sekarang juga, dengan menekan tombol dibawah ini!</p>
                                <div class="btn-style-1" >
                                    <a class="font-size-14 btn-1-padding-2 text-center"  href="https://wa.me/<?= $this->Settings_model->general()["whatsappv2"]; ?>">Hubungi Admin </a>
                                </div>
                            </div>
                        </div>

                        <?php if($this->cart->total_items() > 0){ ?>
                            <div class="billing-info-wrap padding-20-row-col">
                            <h3>Alamat Pengiriman</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="select-style billing-select mb-35">
                                        <label for="paymentSelectProvinces">Provinsi</label>
                                        <select name="paymentSelectProvinces" id="paymentSelectProvinces" required>
                                            <option></option>
                                            <?php foreach($provinces as $p): ?>
                                                <option value="<?= $p['province_id']; ?>"><?= $p['province']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <?php if($setting['ongkir'] == 0){ ?>
                                    <div class="select-style billing-select mb-35">
                                        <label for="paymentSelectRegenciesOngkir">Kota/Kabupaten</label>
                                        <select name="paymentSelectRegenciesOngkir" id="paymentSelectRegenciesOngkir" required>
                                            <option></option>
                                        </select>
                                    </div>
                                <?php }else{ ?>
                                    <div class="select-style billing-select mb-35">
                                        <label for="paymentSelectRegencies">Kota/Kabupaten</label>
                                        <select name="paymentSelectRegencies" id="paymentSelectRegencies" required>
                                            <option></option>
                                        </select>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info input-style mb-35">
                                        <label for="district">Kecamatan</label>
                                        <input type="text" autocomplete="off" id="district" name="district" placeholder="Nama Kecamatan" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info input-style mb-35">
                                        <label for="village">Desa/Kelurahan</label>
                                        <input type="text" autocomplete="off" id="village" name="village" placeholder="Nama Desa/Kelurahan" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info input-style mb-35">
                                        <label for="address">Alamat Lengkap</label>
                                        <input type="text" autocomplete="off" id="address" name="address" placeholder="Alamat Jalan / No. RT RW / No. Rumah" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info input-style mb-35">
                                        <label for="zipcode">Kode Pos</label>
                                        <input type="number" autocomplete="off" id="zipcode" name="zipcode" placeholder="Kode Pos" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="billing-info input-style mb-35">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" autocomplete="off" id="name" name="name" placeholder="Nama Penerima" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="billing-info input-style mb-35">
                                        <label for="telp">Nomor Telepon</label>
                                        <input type="number" autocomplete="off" id="telp" name="telp" placeholder="No Telp. / WA" required>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="mb-35"></div>
                            <?php if($setting['ongkir'] != 0){ ?>
                                <div class="select-style billing-select mb-35">
                                    <label for="paymentSelectProvinces">Metode Pengiriman</label>
                                    <small class="text-danger" id="paymentTextNotSupportDelivery" style="display: none;">Metode antar belum tersedia untuk tempat Anda.</small>
                                    <div class="form-group mt-3" id="groupPaymentSelectKurir">
                                        <select name="paymentSelectKurir" id="paymentSelectKurir" class="form-control" required>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <?php }else{ ?>
                            <div class="alert alert-warning">Kamu belum belanja? Belanja terlebih dahulu..</div>
                        <?php } ?>
                    </div>


                    <div class="col-lg-5">
                        <div class="order-summary">
                            <div class="order-summary-title">
                                <h3>Ringkasan Pesanan</h3>
                            </div>
                            <div class="order-summary-top">
                                <?php foreach($this->cart->contents() as $item): ?>
                                    <div class="order-summary-img-price">
                                        <div class="order-summary-img-title">
                                            <div class="order-summary-img">
                                                <a href="product-details.html"><img src="<?= base_url(); ?>assets/images/product/<?= $item['img']; ?>" alt=""></a>
                                            </div>
                                            <div class="order-summary-title">
                                                <h4><?= $item['name']; ?> <span>× <?= $item['qty']; ?></span></h4>
                                            </div>
                                            <?php if($item['ket'] == ""){ ?>
                                                <p> </p>
                                            <?php }else{ ?>
                                                <p><?= $item['ket']; ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="order-summary-price">
                                        <?php  

                                        // Menghitung Persennya
                                        // hl (harga lama) 
                                        // hb (harga baru) 
                                        $hl = $data['price']; 
                                        $hb = $data['promo_price'];  
                                        $ha = ($hb * 100) / $hl ;
                                        $fha = 100 - $ha;
                                        ?>   

                                        
                                            <span>Rp<?= number_format($item['subtotal'],0,",","."); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="order-summary-middle">
                                <ul>
                                    <li>Total Belanja <h4>Rp<?= number_format($this->cart->total(),0,",","."); ?></h4>
                                    </li>
                                    <li>Biaya Antar <h4><p id="paymentSendingPrice">Rp0</p></h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="order-summary-bottom">
                                <h4>Total <span id="paymentTotalAll">Rp<?= number_format($this->cart->total(),0,",","."); ?></span></h4>
                            </div>

                            <?php if($this->cart->total_items() > 0){ ?>
                                <div class="mcp-btn" >
                                     <button class=" text-center" style="width:100%!important;" id="btnPaymentNow" type="submit">Lanjutkan</button>
                                </div>
                            <?php }else{ ?>
                                <div class="alert mt-2 alert-warning">Belum ada Item di Keranjang.</div>
                                <div class="btn-style-1" >
                                    <a class="font-size-14 btn-1-padding-2 text-center" style="width:100%!important;" href="<?= base_url(); ?>products">Belanja Dulu </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

<style>

    .mcp-btn {
        margin-top : 50px;
    }
    .mcp-btn button {
        color: #1CCAA1!important;
        border-radius: 20px;
        border: 1px solid #1CCAA1!important;
        background-color: #f8f8f8!important;
        padding: 10px 0px;
    }
    .mcp-btn button:hover {
        background-color: #DC143C!important;
        border: 1px solid #DC143C!important;
        color: white!important;
    }
</style>