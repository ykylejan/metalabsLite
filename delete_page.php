<?php
include("metalabsdb.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `student_enrollment` WHERE `id` = '$id'"; 
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("query failed");
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $course = $row['course']; 
            $birthdate = $row['birthdate']; 
            $address = $row['address']; 
            $contactNumber = $row['contact_number']; 
            $course = $row['course']; 
        }

        if (isset($_GET['id'])) {
            $query = "INSERT INTO `student_archive` (`id`, `first_name`, `last_name`, `birthdate`, `address`, `contact_number`, `course`) values 
            ('$id', '$firstName', '$lastName', '$birthdate', '$address', '$contactNumber', '$course')";
            $result = mysqli_query($connection, $query);
        }

    }
    
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `student_enrollment` WHERE `id` = '$id'";
    $result = mysqli_query($connection, $query);

}
 
if (!$result) {
    // die("Query Failed".mysqli_error($connection));
    die("Query Failed");
} else {
    header('Location: index.php?delete_msg=You have deleted a record');
}