<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo url('css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo url('admin/admin-asset/plugins/font-icons/fontawesome/css/regular.css') ?>">
    <link rel="stylesheet" href="<?php echo url('admin/admin-asset/plugins/font-icons/fontawesome/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?php echo url('css/owl.carousel.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo url('css/bootstrap.min.css') ?>" />

    <script src="<?php echo url('js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?php echo url('js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?php echo url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo url('js/bootstrap.min.js') ?>"></script>

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>