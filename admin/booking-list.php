<?php $active = 'booking' ?>
<?php $title = "Booking List" ?>

<!DOCTYPE html>
<html lang="en">
<?php include('./includes/head.php') ?>

<body>
    <link rel="stylesheet" type="text/css" href="<?php echo url('admin-asset/plugins/table/datatable/datatables.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url('admin-asset/plugins/table/datatable/dt-global_style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url('admin-asset/assets/css/forms/theme-checkbox-radio.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url('admin-asset/plugins/table/datatable/custom_dt_custom.css') ?>">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <?php include('./includes/navbar.php') ?>
    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Booking</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>List</span></li>
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
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="default-ordering" class="table table-hover style-2" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Name</th>
                                            <th>Flight</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Seat Number</th>
                                            <th>Date</th>
                                            <th>Total Amount</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        include 'includes/connection.php';

                                        $sql = "SELECT bookings.*,users.fname,users.lname,flights.name as flight_name,from_city.name as from_city,to_city.name as to_city FROM `bookings` JOIN users on users.id=bookings.user_id JOIN flights on flights.id = bookings.flight_id JOIN schedules on schedules.id = bookings.schedule_id JOIN cities as from_city ON schedules.from_city_id=from_city.id JOIN cities as to_city ON schedules.to_city_id=to_city.id WHERE bookings.canceled = 0";

                                        if ($result = $conn->query($sql)) {
                                            $i = 01;
                                            while ($row = $result->fetch_assoc()) {
                                                $schedule_id = $row['id'];
                                                echo "<tr><td>" . $i . "</td>";
                                                echo "<td>" . $row['fname'] . " " . $row['lname'] . "</td>";
                                                echo "<td>" . $row['flight_name'] . "</td>";
                                                echo "<td>" . $row['from_city'] . "</td>";
                                                echo "<td>" . $row['to_city'] . "</td>";
                                                echo "<td>" . $row['seat_num'] . "</td>";
                                                echo "<td>" . $row['date'] . "</td>";
                                                echo "<td>" . $row['total_amount'] . "</td>";
                                                // echo "<td>";
                                                // echo '<a href="'.url("edit-schedule.php?schedule_id=$schedule_id") .'"><button class="btn btn-success">Edit</button></a>';
                                                // echo '<a href="'.url("schedule.php?submit=delete&schedule_id=$schedule_id") .'" onclick="return confirm(\'Are You Sure ?\')"><button class="btn btn-danger">Delete</button></a>';
                                                // echo "</td></tr>\n";
                                                echo "</tr>";
                                                $i++;
                                            }
                                        } else {
                                            echo ("Error description: " . $mysqli->error);
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" style="text-align:right">Total:</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
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
    <script src="<?php echo url('admin-asset/plugins/table/datatable/datatables.js') ?>"></script>
    <script>
        $('#default-ordering').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function() {
                $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5');
            },
            footerCallback: function(row, data, start, end, display) {
                var api = this.api(),
                    data;

                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '') * 1 :
                        typeof i === 'number' ?
                        i : 0;
                };

                // Total over all pages
                total = api
                    .column(7)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Total over this page
                pageTotal = api
                    .column(7, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                // Update footer
                console.log(total,pageTotal)
                console.log(api.column(7).footer())
                $(api.column(7).footer()).html(
                    '$' + pageTotal + ' ( $' + total + ' total)'
                );
            }
        });
    </script>
</body>

</html>