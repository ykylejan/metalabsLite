<?php
include("metalabsdb.php");
if(isset($_POST['addStudents'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $contactNum = $_POST['contactNum'];
    $birthdate = $_POST['birthDate'];

    if($fname == "" || empty($fname)) {
        header("location: index.php? message= Please write your first name!");
    } else {
        
        $query = "INSERT INTO `student_enrollment` (`first_name`, `last_name`, `birthdate`, `contact_number`) values ('$fname', '$lname', '$birthdate', '$contactNum')";
        $result = mysqli_query($connection, $query);
        
        if(!$result) {
            die("Query Failed".mysqli_error());
        } else {
            header("location: index.php? insert_msg= Student added successfully!");
        }
    }
}