<?php
include("metalabsdb.php");
if (isset($_POST['addStudents'])) {
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





    if (
        ($fname == "" || empty($fname)) && ($lname == "" || empty($lname)) && ($contactNum == "" || empty($contactNum))
        && ($birthdate == "" || empty($birthdate)) && ($streetAddress == "" || empty($streetAddress))
        && ($courses == "" || empty($courses)) && ($gender == "" || empty($gender)) && ($city == "" || empty($city))
        && ($region == "" || empty($region)) && ($postalCode == "" || empty($postalCode))
        && ($department == "" || empty($department)) && ($yearLevel == "" || empty($yearLevel))
    ) {
        $errorMessage = "Please fill up all the necessary information!";
        echo "<script>alert({$errorMessage});</script>";
    } else {

        $query = "INSERT INTO `student_enrollment` (`first_name`, `last_name`, `birthdate`, `contact_number`, `address`, `course`, `gender`,`city`, `region`, `postal_code`, `department`, `year_level`) 
        values ('$fname', '$lname', '$birthdate', '$contactNum', '$streetAddress', '$courses', '$gender', '$city', '$region', '$postalCode', '$department', '$yearLevel')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error());
        } else {
            header("location: home.php? insert_msg= Student added successfully!");
        }
    }
}