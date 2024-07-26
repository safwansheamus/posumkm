<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrator</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/logo/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/admin/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/admin/assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/admin/assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/admin/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/assets/css/style.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/assets/css/header.css" rel="stylesheet">
		<link href="<?= base_url(); ?>assets/admin/ssets/css/menu.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/assets/css/responsive.css" rel="stylesheet">

	</head>

<body class="bg_darck">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="logo">
                    <a href="#">
                        <strong class="logo_icon">
                            <img alt="" src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['logo']; ?>">
                        </strong>
                        <span class="logo-default">
                            <img alt="" src="<?= base_url();  ?>assets/images/logo/<?= $this->Settings_model->getSetting()['logo']; ?>" style="height:80px;">
                        </span>
                    </a>
                </div>
                <div class="login-form mt-5">

                <?php echo $this->session->flashdata('failed'); ?> 
                    <form action="<?= base_url(); ?>login/admin" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" autocomplete="off" id="username" name="username" placeholder="username" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" autocomplete="off" id="password" name="password" placeholder="password" required class="form-control">
                        </div>
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" id="cookie" name="cookie"> Ingat Saya
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
      /* Ganti Warna Background disini kalo bosen :-) */
      body {
        background-color: #f7faff!important;
      }

      /*  */
      .login-form {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 16px 20px 0 rgba(0, 0, 0, 0.1);
      }
    </style>

    <script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url(); ?>assets/admin/assets/js/custom.js" type="text/javascript"></script>
</body>


</html>

