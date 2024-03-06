<?php
include("metalabsdb.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `student_enrollment` WHERE `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("query failed");
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            // $name = $row['first_name'] . " " . $row['last_name'];
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $birthdate = $row['birthdate'];
            $address = $row['address'];
            $contactNumber = $row['contact_number'];
            $courses = $row['course'];

            $gender = $row['gender'];
            $city = $row['city'];
            $region = $row['region'];
            $postalCode = $row['postal_code'];
            $department = $row['department'];
            $yearLevel = $row['year_level'];
        }

        if (isset($_GET['id'])) {
            $query = "INSERT INTO `student_archive` (`id`, `first_name`, `last_name`, `birthdate`, `address`, `contact_number`, `course`, `gender`, `city`, `region`, `postal_code`, `department`, `year_level`) values 
            ('$id', '$firstName', '$lastName', '$birthdate', '$address', '$contactNumber', '$courses', '$gender', '$city', '$region', '$postalCode', '$department', '$yearLevel')";
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
    header('Location: home.php?delete_msg=You have deleted a record');
}
