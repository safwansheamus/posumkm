<div class="content_wrapper">
					<div class="container-fluid">
						<!-- breadcrumb -->
						<div class="page-heading">
							<div class="row d-flex align-items-center">
								<div class="col-md-6">
									<div class="page-breadcrumb">
										<h1>Dashboard</h1>
									</div>
								</div>
								<div class="col-md-6 justify-content-md-end d-md-flex">
									<div class="breadcrumb_nav">
										<ol class="breadcrumb">
											<li>
												<i class="fa fa-home"></i>
												<a class="parent-item" href="<?= base_url(); ?>administrator">Home</a>
												<i class="fa fa-angle-right"></i>
											</li>
											<li class="active">
												Dashboard
											</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
						<!-- breadcrumb_End -->

						<!-- Section -->
						<section class="chart_section">
              <div class="row">
                <div class="col-xl-3 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-3">
                          <i class="icon-basket-loaded  text-primary f30"></i>
                        </div>
                        <?php $data = $this->db->get_where('invoice', ['process' => 0])->num_rows(); ?>
                        <div class="col-9">
                          <h6 class="m-0">Pesanan</h6>
                          <p class="f12 mb-0">
                            <?= $data; ?> Pesanan Baru
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body ">
                      <div class="row">
                        <div class="col-3">
                          <i class="icon-bag text-info f30"></i>
                        </div>
                        <?php $data = $this->db->get('invoice')->num_rows(); ?>
                        <div class="col-9">
                          <h6 class="m-0">Produk di Order</h6>
                          <p class="f12 mb-0">
                          <?= $data; ?> Produk Telah di Order
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body ">
                      <div class="row">
                        <div class="col-3">
                          <i class="icon-tag text-danger f30"></i>
                        </div>
                        <?php $data = $this->db->get('categories')->num_rows(); ?>
                        <div class="col-9">
                          <h6 class="m-0">Kategori</h6>
                          <p class="f12 mb-0">
                          <?= $data; ?> Kategori Produk
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4">
                  <div class="card ">
                    <div class="card-body ">
                      <div class="row">
                        <div class="col-3">
                          <i class="icon-handbag text-success f30"></i>
                        </div>
                        <?php $data = $this->db->get('products')->num_rows(); ?>
                        <div class="col-9">
                          <h6 class="m-0">Produk</h6>
                          <p class="f12 mb-0">
                          <?= $data; ?> Produk Terbaik 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

								<div class="row">
									<div class="col-md-7 col-lg-12 col-xl-7">
								<div class="card card-shadow mb-4">
									<div class="card-header">
										<div class="card-title">
											Hasil Penjualan
										</div>
									</div>
									<div class="card-body">
										<div id="b-area" class="box_height"></div>
									</div>
								</div>
							</div>


              <?php $this->db->limit(6); $data = $this->db->get_where('invoice', ['process' => 0]); ?>
							<div class="col-md-5 col-lg-12 col-xl-5">
								<div class="card card-shadow mb-4 ">
								<div class="card-header">
										<div class="card-title">
											Pesanan Terakhir
										</div>
									</div>
									<div class="card-body">
									<div class="rb_card scroll_auto scroll_mr light_scroll">

                  <?php if($data->num_rows() > 0){ ?>
              
                        <?php foreach($data->result_array() as $d): ?>
                          <div class="media mb-4">
                            <span class="avatar_pic avatar_pic-md ">
                            <img class="align-self-center mr-3 rounded-circle" src="<?= base_url(); ?>assets/admin/assets/images/pp.png" alt="">
                            <i></i>
                            </span>
                            <div class="media-body pl-3">
                              <p class="mb-0">
                                <a href="<?= base_url(); ?>administrator/order/<?= $d['invoice_code'] ?>">
                                    <strong class="weight-600">#<?= $d['invoice_code'] ?></strong>
                                </a>
                              </p>
                              <span class="badge badge-info weight-300 text-capitalize"><?= $d['name'] ?></span> <span class="badge badge-danger weight-300"><?= $d['telp'] ?></span>
                            </div>
                            <div class="float-right text-info">
                              <span>Rp. <?= number_format($d['total_all'],0,",",".") ?></span>
                            </div>
                          </div>
                        <?php endforeach; ?>
                   
                  <?php }else{ ?>
                      <div class="alert alert-warning">Belum ada pesanan masuk</div>
                  <?php } ?>

									
									</div>
									</div>

								</div>

							</div>


								</div>

								<div class="row">

              
									<div class="col-xl-4">
								<div class="card card-shadow mb-4">
									<div class="card-header">
										<div class="card-title">
											Produk Terbaru
										</div>
									</div>
									<div class="card-body">
                  <?php foreach($recent2->result_array() as $p): ?>
                    <div class="media mb-4">
											<img class="align-self-center mr-3 rounded-circle image-w" src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt=" ">
											<div class="media-body">
												<p class="mb-0">
													<strong class=""><?= $p['title']; ?></strong>
												</p>
                        <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
												<span>Lihat Produk</span>
                        </a>
											</div>
											<div class="float-right text-info">
												<span>Rp. <?= str_replace(",",".",number_format($p['price'])); ?></span>
											</div>
										</div>
                  <?php endforeach; ?>
									</div>
								</div>
							</div>


              <?php $desc = $this->db->get('settings')->row_array(); ?>
							<div class="col-xl-4">
              
              <div class="card card-shadow mb-4">
									<div class="card-header">
										<div class="card-title">
											<i class="icon-bell pr-2"></i> <?= $this->Settings_model->general()["app_name"]; ?>
										</div>
									</div>
									<div class="card-body">
										<p>
                    <?= $desc['short_desc']; ?>
										</p>
									</div>
								</div>
						  </div>


            <?php $desc = $this->db->get('settings')->row_array(); ?>
						<div class="col-xl-4 mb-4">
                <div class="card mb-4">
                      <div class="card-body">
                        <h5 class="card-title">Logo <?= $this->Settings_model->general()["app_name"]; ?></h5>
                      </div>
                      <img class="img-fluid" src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['logo']; ?>" alt="Card image cap">
                      <div class="card-body ">
                        <a href="<?= base_url(); ?>administrator/setting/general" class="float-right btn btn-outline-primary">Ganti Logo</a>
                      </div>
                </div>
            </div>



								</div>

							</div>


						</section>
						<!-- Section_End -->

					</div>
				</div>
