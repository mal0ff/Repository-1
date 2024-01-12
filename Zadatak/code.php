<?php
session_start();
require 'databasecon.php';

if(isset($_POST['update_employed']))

{   
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $adress = mysqli_real_escape_string($con, $_POST['adress']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $supervisor = mysqli_real_escape_string($con, $_POST['supervisor']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $jmbg = mysqli_real_escape_string($con, $_POST['jmbg']);

    $query = "UPDATE employed SET name= '$name', email='$email', adress='$adress', position='$position',
              date='$date', supervisor='$supervisor', status='$status', jmbg='$jmbg' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Update failed";
           header("Location: index.php");
           exit(0);
    }


}
if(isset($_POST['save_info']))
{
    //$id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $adress = mysqli_real_escape_string($con, $_POST['adress']);
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $supervisor = mysqli_real_escape_string($con, $_POST['supervisor']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $jmbg = mysqli_real_escape_string($con, $_POST['jmbg']);

    $query = "INSERT INTO employed (name, email, adress, position, date, supervisor, status, jmbg) VALUES 
        ('$name', '$email', '$adress', '$position', '$date', '$supervisor', '$status', '$jmbg')";

        $query_run = mysqli_query($con, $query);
        if($query_run) 
        {
            $_SESSION['message'] = "Added Successfully";
           header("Location: zaposleni.php");
           exit(0);
        }
        else 
        {
            $_SESSION['message'] = "Failed to Add";
           header("Location: zaposleni.php");
           exit(0);
        }

}

?>