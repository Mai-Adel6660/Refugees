<?php /* C:\xampp\htdocs\Refugees\resources\views/admin/layouts/header.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo e(!empty($title)?$title:trans('admin.adminpanel')); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <?php if(direction()=='ltr'): ?>
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/AdminLTE.min.css">
  <?php else: ?>
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/rtl.css">
  <!--<link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/fonts/fonts-fa.css">-->
  <!--Cairo Font-->
  <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  <style type="text/css">
    html,body,.alert,h1,h2,h3,h4,h5{
    font-family: 'Cairo', sans-serif;
  }
  </style>
  <?php endif; ?>
  

  <!-- Using SELECT2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- jsTree -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/jsTree/themes/default/style.css">

  <script src="<?php echo e(url('/design/adminlte/dist/js/myFunc.js')); ?>"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">