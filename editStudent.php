<?php
include("header.php");
include("metalabsdb.php");
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `student_enrollment` WHERE `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("query failed" . mysqli_error());
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

?>

<?php
if (isset($_POST['update_students'])) {

    if(isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }

    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $birthdate = $_POST['birthDate'];
    $contactNum = $_POST['contactNum'];

    $query =
        "UPDATE `student_enrollment` SET `first_name` = '$fname', `last_name` = '$lname', 
        `birthdate` = '$birthdate', `contact_number` = '$contactNum' WHERE `id` = '$idnew'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("query failed" . mysqli_error());
    } else {
        header('location: index.php?update_msg=You have successfully updated the student data.');
    }
}
?>