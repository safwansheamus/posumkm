<!doctype html>
<html class="no-js" lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="<?= $this->Settings_model->getSetting()['short_desc']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="<?= base_url(); ?>" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="<?= base_url(); ?>" />
    <meta property="og:site_name" content="<?= $this->Settings_model->general()["app_name"]; ?> - Toko Online Kebutuhan Mu" />
    <meta property="og:image" content="#" />
    <meta property="og:description" content="<?= $this->Settings_model->getSetting()['short_desc']; ?>" />

    <link
      rel="shortcut icon"
      href="<?= base_url(); ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>"
      type="image/x-icon"
    />
    <meta name="msapplication-TileImage" content="assets/images/favicon/cropped-favicon-270x270.png" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/home/assets/css/style.min.css">
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/lightbox2-2.11.1/dist/css/lightbox.css">


</head>

<body>

<div class="main-wrapper">

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