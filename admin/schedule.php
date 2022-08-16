<?php
include 'includes/connection.php';
include 'includes/helper.php';

session_start();

if(isset($_POST['submit']))
{
    $type = $_POST['submit'];
    if($type == 'Add')
    {
        $flight_id = $_POST['flight_id'];
        $price = $_POST['price'];
        $to_city_id = $_POST['to_city_id'];
        $from_city_id = $_POST['from_city_id'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];

        $sql = "INSERT INTO schedules (flight,price,to_city_id,from_city_id,departure,arrival) VALUES ('$flight_id','$price','$to_city_id','$from_city_id','$departure','$arrival')";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'schedule Add Successfully', 'type' => 'success'];
            header('location:'.url('schedule-list.php'));
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
        $schedule_id = $_POST['schedule_id'];
        $flight_id = $_POST['flight_id'];
        $price = $_POST['price'];
        $to_city_id = $_POST['to_city_id'];
        $from_city_id = $_POST['from_city_id'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];

        $sql = "UPDATE schedules set flight='$flight_id',price='$price',to_city_id='$to_city_id',from_city_id='$from_city_id',departure='$departure',arrival='$arrival' where id='$schedule_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Schedule Updated Successfully', 'type' => 'success'];
            header('location:'.url('schedule-list.php'));
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
        $schedule_id = $_GET['schedule_id'];

        $sql = "DELETE FROM schedules WHERE id='$schedule_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Schedule Deleted Successfully', 'type' => 'success'];
            header('location:'.url('schedule-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

