<head>
    <?php include('helper.php')?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo "Admin Portal" ?></title>
    <link href="<?php echo url('admin-asset/assets/css/loader.css') ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo url('admin-asset/assets/js/loader.js') ?>"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo url('admin-asset/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('admin-asset/assets/css/plugins.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('admin-asset/plugins/sweetalerts/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('admin-asset/plugins/sweetalerts/sweetalert.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('admin-asset/assets/css/components/custom-sweetalert.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px)!important;
        }
    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>

<?php
    include('check_login.php');
?>