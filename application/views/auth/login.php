<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?php echo $message ?></p>

        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email') ?>">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php echo form_error('email') ?>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php echo form_error('password') ?>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url()?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>
