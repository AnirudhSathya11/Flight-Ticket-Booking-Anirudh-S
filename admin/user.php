<?php
include 'includes/connection.php';
include 'includes/helper.php';

session_start();

if(isset($_GET['submit']))
{
    $type = $_GET['submit'];
    if($type == 'delete')
    {
        $user_id = $_GET['user_id'];

        $sql = "DELETE FROM users WHERE id='$user_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'User Delete Successfully', 'type' => 'success'];
            header('location:'.url('user-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}