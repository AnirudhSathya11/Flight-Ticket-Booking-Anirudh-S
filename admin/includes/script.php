    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo url('admin-asset/assets/js/libs/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo url('admin-asset/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo url('admin-asset/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo url('admin-asset/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?php echo url('admin-asset/assets/js/app.js') ?>"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo url('admin-asset/assets/js/custom.js') ?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo url('admin-asset/assets/js/scrollspyNav.js') ?>"></script>
    <script src="<?php echo url('admin-asset/plugins/sweetalerts/sweetalert2.min.js') ?>"></script>
    <script src="<?php echo url('admin-asset/plugins/sweetalerts/custom-sweetalert.js') ?>"></script>
    <script>
        const Toastr = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        });
    </script>

    <?php
        if (isset($_SESSION['alert'])) {
        $message = $_SESSION['alert'];
        unset($_SESSION['alert']);
    ?>
    <script>
      Toastr.fire({
        type:"<?php echo ($message['type']) ?>",
        title:"<?php echo ($message['title']) ?>",
      })
    </script>
    <?php } ?>
