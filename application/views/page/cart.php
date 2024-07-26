<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
    <div class="custom-container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="active">Keranjang Belanja</li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-area pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="cart-table-content">
                        <div class="table-content table-responsive">
                        <?php if($this->cart->total_items() > 0){ ?>

                            <table>
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail">Produk</th>
                                        <th class="width-name"></th>
                                        <th class="width-price"> Harga</th>
                                        <th class="width-quantity">Jumlah</th>
                                        <th class="width-subtotal">Total</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php foreach($this->cart->contents() as $item): ?>
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="<?= base_url(); ?>p/<?= $item['slug']; ?>"><img src="<?= base_url(); ?>assets/images/product/<?= $item['img']; ?>" alt=""></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <h5><a href="<?= base_url(); ?>p/<?= $item['slug']; ?>"><?= $item['name']; ?></a></h5>
                                                        <?php if($item['ket'] == ''){ ?>
                                                            <small class="desc_product_<?= $item['rowid']; ?>"><a href="#" class="text-dark" data-toggle="modal" data-target="#modalAddDescription" onclick="showModalAddKet('<?= $item['rowid']; ?>')">Tambah keterangan</a></small>
                                                        <?php }else{ ?>
                                                            <small class="desc_product_<?= $item['rowid']; ?>">Keterangan: <?= $item['ket']; ?> <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('<?= $item['rowid']; ?>')"><i class="fa text-info fa-edit"></i></a></small>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="product-price"><span class="amount">Rp. <?= number_format($item['price'],0,",","."); ?></span></td>
                                                    <td class="product-price">
                                                        <input type="text" name="" id="qtyProduct" value="<?= $item['qty']; ?>">
                                                    </td>
                                                    <td class="product-total"><span>Rp. <?= number_format($item['subtotal'],0,",","."); ?></span></td>
                                                    <td class="product-remove"><a href="<?= base_url(); ?>cart/delete/<?= $item['rowid']; ?>" onclick="return confirm('Ingin Menghapus Item ini dari Keranjang?')">Hapus</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-shiping-update-wrapper">
                                    <div class="continure-clear-btn">
                                        <div class="clear-btn">
                                            <a href="<?= base_url(); ?>cart/delete_cart" onclick="return confirm('Yakin ingin mengosongkan Keranjang?')"><i class="fal fa-times"></i> Kosongkan Keranjang</a>
                                        </div>
                                    </div>

                                    <?php if($this->cart->total_items() > 0){ ?>
                                        <div class="update-btn">
                                            <a href="<?= base_url(); ?>payment">Lanjut ke Pembayaran</a>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="update-btn">
                                            <a href="<?= base_url(); ?>products">Lanjut ke Pembayaran</a>
                                        </div>
                                    <?php } ?>
                                </div>

                                <?php }else{ ?>
                                        <div class="alert alert-warning">Keranjang Belanja Kosong..</div>
                                        <br><br><br>
                                <?php } ?>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="modalEditDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Keterangan Tambahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="bodyModalEditKet">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnEditKetProduct" data-dismiss="modal">Simpan</button>
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAddDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Keterangan Tambahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="bodyModalAddKet">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnSaveKetProduct" data-dismiss="modal">Simpan</button>
        </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>

    function showModalAddKet(id){
        $("#bodyModalAddKet").html(`<div class="form-group">
            <textarea name="ket_product" id="ket_product" class="form-control form-control-sm" placeholder="Model, ukuran, warna, dll."></textarea>
            <input type="hidden" id="rowid_pro" value=${id}>
        </div>`);
    }

    function showModalEditKet(id){
        $.ajax({
            url: "<?= base_url(); ?>cart/get_item",
            type: "post",
            dataType: "json",
            data: {
                rowid: id
            },
            success: function(res){
                $("#bodyModalEditKet").html(`<div class="form-group">
                    <textarea name="ket_product" id="ket_product_edit" class="form-control form-control-sm" placeholder="Model, ukuran, warna, dll.">${res.ket}</textarea>
                    <input type="hidden" id="rowid_pro_edit" value=${id}>
                </div>`);      
            }
        })
    }

    $("#btnSaveKetProduct").on('click', function(){
        const rowid = $("#rowid_pro").val();
        const ket = $("#ket_product").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/add_ket",
            type: "post",
            data: {
                rowid: rowid,
                ket: ket
            },
            success: function(){
                $("small.desc_product_"+rowid).html("ket: " + ket + ` <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('${rowid}')"><i class="fa text-info fa-edit"></i></a>`);
            }
        })
    })

    $("#btnEditKetProduct").on('click', function(){
        const rowid = $("#rowid_pro_edit").val();
        const ket = $("#ket_product_edit").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/add_ket",
            type: "post",
            data: {
                rowid: rowid,
                ket: ket
            },
            success: function(){
                $("small.desc_product_"+rowid).html("ket: " + ket + ` <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('${rowid}')"><i class="fa text-info fa-edit"></i></a>`);
            }
        })
    })

</script>


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