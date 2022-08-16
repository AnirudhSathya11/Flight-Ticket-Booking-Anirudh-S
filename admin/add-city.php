<?php $active='city' ?>
<?php $title="Add City"?>

<!DOCTYPE html>
<html lang="en">
<?php include('./includes/head.php') ?>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <?php include('./includes/navbar.php') ?>
    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
            <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">City</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Add</span></li>
                        </ol>
                    </nav>
                </div>
            </li>
        </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <?php include('./includes/sidebar.php') ?>
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Add City</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="POST" action="<?php echo url('city.php')?>">
                                    <div class="form-group mb-4">
                                        <label for="name">City Name</label>
                                        <input id="name" class="form-control" placeholder="Enter City Name" name="name" required>
                                    </div>
                                    <input type="submit" name="submit" class="mt-4 mb-4 btn btn-primary" value="Add">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include('includes/footer.php') ?>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <?php include('includes/script.php') ?>
</body>
</html>