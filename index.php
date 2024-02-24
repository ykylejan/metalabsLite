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
            <th>Configurations</th>
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
                    <td><a button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#courseModal">Course</a>
                    <a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a> 
                    <a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
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

<!-- ADD STUDENT MODAL -->
<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="addStudents" value="ADD"></input>
                </div>
            </div>
        </div>
    </div>


</form>

<!-- COURSE MODAL -->

<form action="insert_data.php" method="post">
    <div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="btn-design">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Course Details</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                    </div>
                    </div>
                <div class="mreadonly">
                <div class="modal-body2">
                <form action="insert_data.php" method="post">
                    <div class="modal-body">
                        <label for="fName">Student ID</label>
                        <input type="text" name="studentID" class="form-control d-inline-flex focus-ring text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), 0)" readonly>
                    </div>

                    <div class="modal-body">
                        <label for="lName">Full Name</label>
                        <input type="text" name="fName" class="form-control d-inline-flex focus-ring text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), 0)" readonly>
                    </div>
                    
                    <div class="modal-body">
                        <label for="contactNum">Year Level</label>
                        <input type="text" name="yearLVL" class="form-control d-inline-flex focus-ring text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), 0)" readonly>
                    </div>

                    <div class="modal-body">
                        <label for="birthDate">College Department</label><br>
                        <select class="form-select" aria-label="collegeDept">
                        <option selected>COLLEGE DEPARTMENT</option>
                        <option value="PS">PS</option>
                        <option value="CCE">CCE</option>
                        <option value="CLE">CLE</option>
                        </select>
                        <!-- <input type="text" name="collegeDept" class="form-control"> -->
                        
                        
                    </div>

                    
                    <div class="modal-body">
                        <label for="contactNum">Enrolled Courses</label>
                        <input type="text" name="enCourse" class="form-control">
                    </div>

                    

                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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