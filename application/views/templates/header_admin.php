<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link
      href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo/favicon.png" type="image/x-icon">

    <!-- Custom styles for this template-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

    <link
      rel="shortcut icon"
      href="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>"
      type="image/x-icon"
    />

    <link rel="stylesheet" media="screen" type="text/css" href="<?= base_url(); ?>assets/css/colorpicker.css" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
		<link href="<?= base_url(); ?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url(); ?>assets/admin/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url(); ?>assets/admin/assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url(); ?>assets/admin/assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
		<!--bs4 data table-->
		<link href="<?= base_url(); ?>assets/admin/assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/weather-icons.min.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/style.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/header.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/menu.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/header.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/menu.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/responsive.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/dark.css" rel="stylesheet">




    <style>

      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }

      .ck-editor__editable_inline {
          min-height: 300px;
      }

      .description-product-detail {
        color: #666;
      }

      .description-product-detail h2 {
        font-size: 22px;
      }

      .description-product-detail h3 {
        font-size: 19px;
      }

      .description-product-detail h4 {
        font-size: 17px;
      }

      .description-product-detail p {
        font-size: 14.5px;
      }

      .description-product-detail img {
        width: 50%;
      }

    </style>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>

 
	<body>
  <?php
  $setting = $this->db->get('settings')->row_array();
  $dateNow = date('Y-m-d H:i');
  $dateDB = $setting['promo_time'];
  $dateDBNew = str_replace("T"," ",$dateDB);
  if($dateNow >= $dateDBNew){
    $this->db->set('promo', 0);
    $this->db->update('settings');
  }
  ?>
    <!-- Page Wrapper -->
    <div id="wrapper">


      <header class="main-header">
				<div class="container_header">
					<div class="logo d-flex align-items-center justify-content-center justify-content-lg-start">
						<a href="<?= base_url(); ?>administrator"> <strong class="logo_icon"> 
                  <img src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>" alt=""> </strong> 
                <!-- <span class="logo-default"> 
                  <img src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['logo']; ?>" style="filter: invert(100%);">
                </span>  -->
            </a>
						<div class="icon_menu">
							<a href="#" class="menu-toggler sidebar-toggler"></a>
						</div>
					</div>

					<div class="right_detail">
						<div class="row d-flex align-items-center min-h pos-md-r">

							<div class="col-xl-5 col-3 search_col">
								<div class="top_function">
								</div>
							</div>

							<div class="col-xl-7 col-9 d-flex justify-content-end">
								<div class="right_bar_top d-flex align-items-center">
                
                  <div class="dropdown dropdown-user mr-3">
										<a href="<?= base_url(); ?>administrator/edit" class="dropdown-toggle" > 
                      <img class="img-circle pro_pic" src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>" alt=""> </a>
									</div>

                  <div class="search">
									  	<a id="toggle_res_search" data-toggle="modal" data-target="#logoutModal" class="res-only-view collapsed" href="javascript:void(0);" aria-expanded="false"> <i class=" icon-logout"></i> </a>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>
			</header>

      
<div class="container_full">
      

			<div class="side_bar scroll_auto">
					<div class="user-panel">
						<div class="user_image">
							<img src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>" class="img-circle mCS_img_loaded" alt="User Image">
						</div>
						<div class="info">
							<p>
                Admin Pos Umkm
							</p>
							<a href="#"> <i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>

					<ul id="dc_accordion" class="sidebar-menu tree">

						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator" class="">  <i class="fa fa-home"></i> <span>Dashboard</span> </a>
						</li>

            <?php $orders = $this->db->get_where('invoice', ['process' => 0]); ?>
						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/orders" class="">  <i class="icon-basket-loaded"></i> <span>Pesanan</span> <span class="badge badge-pill badge-success float-right"><?= $orders->num_rows() ?> Pesanan</span> </a>
						</li>

						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/categories" class="">  <i class="icon-tag"></i> <span>Kategori</span> </a>
						</li>

						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/products" class="">  <i class="icon-bag"></i> <span>Produk</span> </a>
						</li>
            
						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/promo" class="">  <i class="icon-badge"></i> <span>Promo</span> </a>
						</li>

						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/testimonials" class="">  <i class="icon-star"></i> <span>Testimoni</span> </a>
						</li>

						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/pages" class="">  <i class="icon-docs"></i> <span>Halaman</span> </a>
						</li>

						<li class="menu_sub">
							<a href="<?= base_url(); ?>administrator/settings" class="">  <i class="icon-settings"></i> <span>Pengaturan</span> </a>
						</li>



					</ul>
				</div>

