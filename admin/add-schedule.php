<?php $active='schedule' ?>
<?php $title="Add Schedule"?>

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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Schedule</a></li>
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
                                        <h4>Add Schedule</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="POST" action="<?php echo url('schedule.php')?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="flight_id">Flight</label>
                                                <select class="form-control" name="flight_id" id="flight_id" required>
                                                    <option value="">Select Flight</option>
                                                <?php
                                                    include('./includes/connection.php');
                                                    $sql = "select * from flights";                        
                                                    if ($result = $conn->query($sql)) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                                        }
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="price">Price</label>
                                                <input type="number" min="0" name="price" id="price" class="form-control" required placeholder="Enter Price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="from_city_id">From</label>
                                                <select class="form-control" name="from_city_id" id="from_city_id">
                                                    <option value="">Select Cities</option>

                                                <?php
                                                    $sql = "select * from cities";
                                                    if ($result = $conn->query($sql)) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                                        }
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="to_city_id">To</label>
                                                <select class="form-control" name="to_city_id" id="to_city_id">
                                                    <option value="">Select Cities</option>

                                                <?php
                                                    $sql = "select * from cities";
                                                    if ($result = $conn->query($sql)) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                                        }
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="departure">Departure Time</label>
                                                <input type="time" name="departure" id="departure" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="to_city_id">Arrival Time</label>
                                                <input type="time" name="arrival" id="arrival" class="form-control" required>
                                            </div>
                                        </div>
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