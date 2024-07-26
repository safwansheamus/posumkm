<div class="breadcrumb-area breadcrumb-area-padding-2 bg-gray-2">
            <div class="custom-container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="blog-area pt-75 pb-75">
            <div class="custom-container">

            <?php if($testi->num_rows() > 0){ ?>
                <div class="row grid">

                <?php foreach($testi->result_array() as $data){ ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 col-sm-6 grid-item">
                        <div class="blog-wrap-2 mb-30">
                            <div class="blog-img-2">
                                <a href="#" style="height:50px;" ></a>
                                <div class="blog-tag-2">
                                    <a href="#"><?= $data['headline']; ?></a>
                                </div>
                            </div>
                            <div class="blog-content-2">
                                <h3><a href="#"><?= $data['content']; ?></a></h3>
                                <div class="blog-btn">
                                    <a href="#"><?= $data['name']; ?></a>
                                </div>
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

