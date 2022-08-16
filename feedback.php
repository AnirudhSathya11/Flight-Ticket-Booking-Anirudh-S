<?php
include 'includes/connection.php';
include 'includes/helper.php';

session_start();

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'add')
    {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO feedbacks (name,mobile,email,message) VALUES ('$name','$mobile','$email','$message')";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Form Submitted Successfully','body' => 'We Will get back to you soon', 'type' => 'success'];
            header('location:'.url('index.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
