<?php

include('./includes/connection.php');
include('./includes/check_login.php');

if(isset($_POST['submit']))
{
    if($_POST['submit'] == 'Edit')
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $user_id = $_POST['user_id'];

        $sql = "UPDATE users set fname='$fname',lname='$lname',address='$address',city='$city',state='$state',country='$country',email='$email',mobile='$mobile' where id='$user_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'User Detail Update Successfully', 'type' => 'success'];

            $sql = "select * from users where id='$user_id'";
            if ($result = $conn->query($sql)) {
                $_SESSION['user'] = $result->fetch_assoc();
                header('location:'.url('profile.php'));
                die();    
            }
        }

        else
        {
            echo $conn->error;
        }

    }
}

if(isset($_GET['submit']))
{
    if($_GET['submit'] == 'Cancel')
    {
        $f_id = $_GET['f_id'];


        $sql = "UPDATE bookings set canceled=1 where id='$f_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Booking Cancelled Successfully','body' => 'Have a nice day!', 'type' => 'success'];
            header('location:'.url('profile.php'));
            die();    
        }

        else
        {
            echo $conn->error;
        }
    }
}