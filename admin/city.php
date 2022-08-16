<?php
include 'includes/connection.php';
include 'includes/helper.php';

session_start();

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'Add')
    {
        $name = $_POST['name'];        
        $sql = "INSERT INTO cities (name) VALUES ('$name')";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'City Added Successfully', 'type' => 'success'];
            header('location:'.url('city-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'Edit')
    {
        $name = $_POST['name'];
        $city_id = $_POST['city_id'];

        $sql = "UPDATE cities set name='$name' where id='$city_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'City Updated Successfully', 'type' => 'success'];
            header('location:'.url('city-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

if(isset($_GET['submit']))
{
    $type = $_GET['submit'];
    if($type == 'delete')
    {
        $city_id = $_GET['city_id'];

        $sql = "DELETE FROM cities WHERE id='$city_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'City Deleted Successfully', 'type' => 'success'];
            header('location:'.url('city-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

