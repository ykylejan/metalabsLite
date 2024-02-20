<?php
include("metalabsdb.php");


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