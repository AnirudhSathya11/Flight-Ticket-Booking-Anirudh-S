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
        $file_name = $_FILES['icon']['name'];
        $file_tmp = $_FILES['icon']['tmp_name'];

        $icon = "icon/". time() ."." .$file_name;
        $isupload = move_uploaded_file($file_tmp,$icon);

        $sql = "INSERT INTO flights (name,icon) VALUES ('$name','$icon')";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Flight Add Successfully', 'type' => 'success'];
            header('location:'.url('flight-list.php'));
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
        $flight_id = $_POST['flight_id'];

        if(isset($_FILES['icon']))
        {
            $file_name = $_FILES['icon']['name'];
            $file_tmp = $_FILES['icon']['tmp_name'];
    
            $icon = "icon/". time() ."." .$file_name;
            $isupload = move_uploaded_file($file_tmp,$icon);
                
            $sql = "UPDATE flights set name='$name',icon='$icon' where id='$flight_id'";
        }
        else 
        {
            $sql = "UPDATE flights set name='$name' where id='$flight_id'";
        }

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Flight Updated Successfully', 'type' => 'success'];
            header('location:'.url('flight-list.php'));
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
        $flight_id = $_GET['flight_id'];

        $sql = "DELETE FROM flights WHERE id='$flight_id'";

        if ($conn->query($sql)) {
            $_SESSION['alert'] = ['title' => 'Flight Deleted Successfully', 'type' => 'success'];
            header('location:'.url('flight-list.php'));
            die();
        }         
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

