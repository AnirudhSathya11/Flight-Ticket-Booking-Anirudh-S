    <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="shadow-bottom"></div>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="<?php echo url('index.php') ?>" <?php if ($active == 'dashboard') echo 'data-active="true" aria-expanded="true"' ?> class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span> Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <!-- <li class="menu">
                        <a href="#city" <?php if ($active == 'city') echo 'data-active="true" aria-expanded="true"' ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <span>City</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="city" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo url('add-city.php') ?>"> Add </a>
                            </li>
                            <li>
                                <a href="<?php echo url('city-list.php') ?>"> List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#flight" <?php if ($active == 'flight') echo 'data-active="true" aria-expanded="true"' ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                <span>Flight</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="flight" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo url('add-flight.php') ?>"> Add </a>
                            </li>
                            <li>
                                <a href="<?php echo url('flight-list.php') ?>"> List </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="menu">
                        <a href="#schedule" <?php if ($active == 'schedule') echo 'data-active="true" aria-expanded="true"' ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Schedule</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="schedule" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo url('add-schedule.php') ?>"> Add </a>
                            </li>
                            <li>
                                <a href="<?php echo url('schedule-list.php') ?>"> List </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#user" <?php if ($active == 'user') echo 'data-active="true" aria-expanded="true"' ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span>User</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="user" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo url('user-list.php') ?>"> List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#booking" <?php if ($active == 'booking') echo 'data-active="true" aria-expanded="true"' ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Booking</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="booking" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo url('booking-list.php') ?>"> List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#feedback" <?php if ($active == 'feedback') echo 'data-active="true" aria-expanded="true"' ?> data-toggle="collapse" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                <span>Feedback</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="feedback" data-parent="#accordionExample">
                            <li>
                                <a href="<?php echo url('feedback-list.php') ?>"> List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="<?php echo url('logout.php') ?>" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span> Logout</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <!--  END SIDEBAR  -->
