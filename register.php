<?php

include 'includes/connection.php';
include 'includes/helper.php';
session_start();

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'Add')
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (fname,lname,email,mobile,address,city,state,country,password) VALUES ('$fname','$lname','$email','$mobile','$address','$city','$state','$country','$password')";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Registration Successfully', 'type' => 'success'];
            header('location:'.url('index.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Register Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo url('admin/admin-asset/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('admin/admin-asset/assets/css/plugins.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo url('admin/admin-asset/assets/css/authentication/form-2.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo url('admin/admin-asset/assets/css/forms/theme-checkbox-radio.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url('admin/admin-asset/assets/css/forms/switches.css') ?>">
    <style>
        .form-form .form-form-wrap form .field-wrapper input
        {
            padding: 10px;
        }
    </style>
</head>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Register</h1>
                        <p class="signup-link register">Already have an account? <a href="<?php echo url('login.php') ?>">Log in</a></p>
                        <form class="text-left" method="POST">
                            <div class="form">

                                <div id="fname-field" class="field-wrapper input">
                                    <label for="fname">First Name</label>
                                    <input id="fname" name="fname" type="text" class="form-control" placeholder="First Name">
                                </div>

                                <div id="lname-field" class="field-wrapper input">
                                    <label for="lname">Last Name</label>
                                    <input id="lname" name="lname" type="text" value="" class="form-control" placeholder="Last Name">
                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="text" value="" class="form-control" placeholder="Email">
                                </div>

                                <div id="mobile-field" class="field-wrapper input">
                                    <label for="mobile">Mobile</label>
                                    <input id="mobile" name="mobile" type="text" value="" class="form-control" placeholder="Mobile">
                                </div>

                                <div id="address-field" class="field-wrapper input">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" value="" class="form-control" placeholder="Address">
                                </div>

                                <div id="city-field" class="field-wrapper input">
                                    <label for="city">City</label>
                                    <input id="city" name="city" type="text" value="" class="form-control" placeholder="City">
                                </div>

                                <div id="state-field" class="field-wrapper input">
                                    <label for="state">State</label>
                                    <input id="state" name="state" type="text" value="" class="form-control" placeholder="State">
                                </div>

                                <div id="country-field" class="field-wrapper input">
                                    <label for="country">Country</label>
                                    <input id="country" name="country" type="text" value="" class="form-control" placeholder="Contry">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <input id="password" name="password" type="password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter,
                                and at least 8 or more characters" placeholder="Password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>


                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="Add" name="submit">Get Started!</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo url('admin/admin-asset/assets/js/libs/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo url('admin/admin-asset/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo url('admin/admin-asset/bootstrap/js/bootstrap.min.js') ?>"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo url('admin/admin-asset/assets/js/authentication/form-2.js') ?>"></script>

</body>
</html>

