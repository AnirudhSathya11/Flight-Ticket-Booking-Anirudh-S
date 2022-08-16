<!DOCTYPE html>
<html lang="en">
<?php $title = "E-Reservation System" ?>
<?php session_start() ?>
<?php $home=true ?>
<?php include('./includes/helper.php') ?>
<?php include('./includes/head.php') ?>

<body>
    <div class="scroll-up-btn">
        <i class="far fa-caret-square-up"></i>
    </div>
    <?php include('./includes/nav-bar.php') ?>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Free Online Flight Ticket Booking</div>
                <div class="text-2">Book Flight</div>
                <!-- <div class="text-3">And I'm a <span class="typing"></span></div> -->
                <a data-toggle="modal" data-target="#booknow">Book Now</a>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="booknow" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <!-- Modal content-->
            <div class="modal-content">
                <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
                <div class="modal-body">
                    <div class="cont-value">
                        
                        <form method="post" name="jeet" action="<?php echo url('result.php') ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">From</legend>
                                        <select required="" name="from" class="form-control">
                                            <option value="">Select Place</option>

                                            <?php
                                                include 'includes/connection.php';

                                                $sql = "select * from cities";

                                                if ($result = $conn->query($sql)) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">To</legend>
                                        <select required="" name="to" class="form-control">
                                            <option value="">Select Place</option>
                                            <?php
                                                $sql = "select * from cities";
                                                if ($result = $conn->query($sql)) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">Date</legend>
                                        <input type="date" name="date" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">Passenger</legend>
                                        <select name="pas" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group border p-3">
                                        <legend class="w-auto px-2">Class</legend>
                                        <select name="class" class="form-control">
                                            <option value="1">Business</option>
                                            <option value="2">First Class</option>
                                            <option value="3">Economy Class</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="red-button" name="submit" >Submit</button>
                                <button type="button" class="red-button" data-dismiss="modal">Close</button>
                            </div>
                           <?php
                            if(isset($_SESSION['error']))
                            {
                                echo'<script>alert("From and To should not be same.")</script>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <script src="<?php echo url('js/jssor.slider-28.0.0.min.js') ?>" type="text/javascript"></script>
            <script type="text/javascript">
                window.jssor_1_slider_init = function() {

                    var jssor_1_SlideshowTransitions = [{
                            $Duration: 500,
                            $Delay: 12,
                            $Cols: 10,
                            $Rows: 5,
                            $Opacity: 2,
                            $Clip: 15,
                            $SlideOut: true,
                            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                            $Assembly: 2049,
                            $Easing: $Jease$.$OutQuad
                        },
                        {
                            $Duration: 500,
                            $Delay: 40,
                            $Cols: 10,
                            $Rows: 5,
                            $Opacity: 2,
                            $Clip: 15,
                            $SlideOut: true,
                            $Easing: $Jease$.$OutQuad
                        },
                        {
                            $Duration: 1000,
                            x: -0.2,
                            $Delay: 20,
                            $Cols: 16,
                            $SlideOut: true,
                            $Formation: $JssorSlideshowFormations$.$FormationStraight,
                            $Assembly: 260,
                            $Easing: {
                                $Left: $Jease$.$InOutExpo,
                                $Opacity: $Jease$.$InOutQuad
                            },
                            $Opacity: 2,
                            $Outside: true,
                            $Round: {
                                $Top: 0.5
                            }
                        },
                        {
                            $Duration: 1600,
                            y: -1,
                            $Delay: 40,
                            $Cols: 24,
                            $SlideOut: true,
                            $Formation: $JssorSlideshowFormations$.$FormationStraight,
                            $Easing: $Jease$.$OutJump,
                            $Round: {
                                $Top: 1.5
                            }
                        },
                        {
                            $Duration: 1200,
                            x: 0.2,
                            y: -0.1,
                            $Delay: 16,
                            $Cols: 10,
                            $Rows: 5,
                            $Opacity: 2,
                            $Clip: 15,
                            $During: {
                                $Left: [0.3, 0.7],
                                $Top: [0.3, 0.7]
                            },
                            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                            $Assembly: 260,
                            $Easing: {
                                $Left: $Jease$.$InWave,
                                $Top: $Jease$.$InWave,
                                $Clip: $Jease$.$OutQuad
                            },
                            $Round: {
                                $Left: 1.3,
                                $Top: 2.5
                            }
                        },
                        {
                            $Duration: 1500,
                            x: 0.3,
                            y: -0.3,
                            $Delay: 20,
                            $Cols: 10,
                            $Rows: 5,
                            $Opacity: 2,
                            $Clip: 15,
                            $During: {
                                $Left: [0.2, 0.8],
                                $Top: [0.2, 0.8]
                            },
                            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                            $Assembly: 260,
                            $Easing: {
                                $Left: $Jease$.$InJump,
                                $Top: $Jease$.$InJump,
                                $Clip: $Jease$.$OutQuad
                            },
                            $Round: {
                                $Left: 0.8,
                                $Top: 2.5
                            }
                        },
                        {
                            $Duration: 1500,
                            x: 0.3,
                            y: -0.3,
                            $Delay: 20,
                            $Cols: 10,
                            $Rows: 5,
                            $Opacity: 2,
                            $Clip: 15,
                            $During: {
                                $Left: [0.1, 0.9],
                                $Top: [0.1, 0.9]
                            },
                            $SlideOut: true,
                            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                            $Assembly: 260,
                            $Easing: {
                                $Left: $Jease$.$InJump,
                                $Top: $Jease$.$InJump,
                                $Clip: $Jease$.$OutQuad
                            },
                            $Round: {
                                $Left: 0.8,
                                $Top: 2.5
                            }
                        }
                    ];
                    var jssor_1_options = {
                        $AutoPlay: 1,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                        }
                    };
                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                    var MAX_WIDTH = 1200;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;
                        if (containerWidth) {
                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        } else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                };
            </script>
            <style>
                .bgrnd {
                    background-image: url("bg/Airplane-bg");
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                    background-attachment: fixed;
                }

                #jssor_1 {
                    transition: 0.8s;
                    transition-timing-function: ease-in-out;
                }

                .jssorl-009-spin img {
                    animation-name: jssorl-009-spin;
                    animation-duration: 1.6s;
                    animation-iteration-count: infinite;
                    animation-timing-function: linear;
                }

                @keyframes jssorl-009-spin {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                .jssorb053 .i {
                    position: absolute;
                    cursor: pointer;
                }

                .jssorb053 .i .b {
                    fill: #fff;
                    fill-opacity: 0.5;
                }

                .jssorb053 .i:hover .b {
                    fill-opacity: .7;
                }

                .jssorb053 .iav .b {
                    fill-opacity: 1;
                }

                .jssorb053 .i.idn {
                    opacity: .3;
                }

                .jssora093 {
                    display: block;
                    position: absolute;
                    cursor: pointer;
                }

                .jssora093 .c {
                    fill: none;
                    stroke: #fff;
                    stroke-width: 400;
                    stroke-miterlimit: 10;
                }

                .jssora093 .a {
                    fill: none;
                    stroke: #fff;
                    stroke-width: 400;
                    stroke-miterlimit: 10;
                }

                .jssora093:hover {
                    opacity: .8;
                }

                .jssora093.jssora093dn {
                    opacity: .6;
                }

                .jssora093.jssora093ds {
                    opacity: .3;
                    pointer-events: none;
                }
            </style>
            <div class="bgrnd">
                <div id="jssor_1" style="position:relative;margin:0 auto;left:0px;width:980px;height:300px;overflow:hidden;visibility:hidden; border:none;border-radius: 20px;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="<?php echo url('images\suu-amr-l7KBz_YXGwE-unsplash.jpg') ?>" />
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo url('images\rudraksha-banjhal-ygWWGI61yeo-unsplash.jpg') ?>" />
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo url('images\daniel-eledut-0dvPFzubryE-unsplash.jpg') ?>" />
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo url('images\praveen-thirumurugan-iQpwzSQbBwE-unsplash.jpg') ?>" />
                        </div>
                        <div>
                            <img data-u="image" src="<?php echo url('images\praveen-thirumurugan-PC9DxtSH4GE-unsplash.jpg') ?>" />
                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                            <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                            <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                            <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                        </svg>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                jssor_1_slider_init();
            </script>
        </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="far fa-calendar-check"></i>
                        <div class="text">Easy Booking</div>
                        <p>We offer easy and convenient flight bookings with attractive offers.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="far fa-money-bill-alt"></i>
                        <div class="text">Lowest Price</div>
                        <p>We ensure low rates on hotel reservation, holiday packages and on flight tickets.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="far fa-calendar-alt"></i>
                        <div class="text">24/7 SUPPORT</div>
                        <p>Get assistance 24/7 on any kind of travel related query. We are happy to assist you</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php include('./includes/footer.php') ?>

</body>

</html>