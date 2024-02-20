<?php
include("header.php");
include("metalabsdb.php");
?>

<br><br>
<div class="box1">
    <h2>Enrollment</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENT</button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Birthdate</th>
            <th>Contact No.</th>
            <th>Enroll Course</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $query = "SELECT * FROM `student_enrollment`";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("query failed" . mysqli_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name'] . " " .  $row['last_name']; ?> </td>
                    <td><?php echo $row['course']; ?> </td>
                    <td><?php echo $row['birthdate']; ?> </td>
                    <td><?php echo "+63" . $row['contact_number']; ?> </td>
                    <td><a href="courseEnroll_page.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Course</a> </td>
                    <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a> </td>
                    <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
                </tr>
        <?php
            }
        }
        ?>

    </tbody>
</table>

<?php

if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}
if (isset($_GET['insert_msg'])) {
    echo "<h6 class='addSuccess'>" . $_GET['insert_msg'] . "</h6>";
}
if (isset($_GET['update_msg'])) {
    echo "<h6 class='addSuccess'>" . $_GET['update_msg'] . "</h6>";
}
if (isset($_GET['delete_msg'])) {
    echo "<h6 class='addSuccess'>" . $_GET['delete_msg'] . "</h6>";
}
?>


<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="modal-body">
                        <label for="fName">First Name</label>
                        <input type="text" name="fName" class="form-control">
                    </div>

                    <div class="modal-body">
                        <label for="lName">Last Name</label>
                        <input type="text" name="lName" class="form-control">
                    </div>

                    <div class="modal-body">
                        <label for="birthDate">Birthdate</label>
                        <input type="date" name="birthDate" class="form-control">
                    </div>

                    <div class="modal-body">
                        <label for="contactNum">Contact Number</label>
                        <input type="text" name="contactNum" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="addStudents" value="ADD"></input>
                </div>
            </div>
        </div>
    </div>


</form>

<div class="box2">
    <button class="btn btn-primary">Print Form</button>
</div>

<?php
include("footer.php");


?>