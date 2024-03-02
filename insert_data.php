<?php
include("metalabsdb.php");
if(isset($_POST['addStudents'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $contactNum = $_POST['contactNum'];
    $birthdate = $_POST['birthDate'];
    $streetAddress = $_POST['street-address'];
    $courses = $_POST['courses'];
    
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $postalCode = $_POST['postal-code'];
    $department = $_POST['department'];
    $yearLevel = $_POST['yearLevel'];


    if($fname == "" || empty($fname)) {
        header("location: index.php? message= Please write your first name!");
    } else {
        
        $query = "INSERT INTO `student_enrollment` (`first_name`, `last_name`, `birthdate`, `contact_number`, `address`, `course`, `gender`,`city`, `region`, `postal_code`, `department`, `year_level`) 
        values ('$fname', '$lname', '$birthdate', '$contactNum', '$streetAddress', '$courses', '$gender', '$city', '$region', '$postalCode', '$department', '$yearLevel')";
        $result = mysqli_query($connection, $query);
        
        if(!$result) {
            die("Query Failed".mysqli_error());
        } else {
            header("location: index.php? insert_msg= Student added successfully!");
        }
    }
}