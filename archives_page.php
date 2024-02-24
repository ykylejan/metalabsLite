<?php
include("header.php");
include("metalabsdb.php");
?>



<div class="table-container">
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Birthdate</th>
                <th>Address</th>
                <th>Contact No.</th>

            </tr>
        </thead>

        <tbody>

            <?php
            $query = "SELECT * FROM `student_archive`";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die("query failed");
            } else {
                while ($row = mysqli_fetch_assoc($result)) {

            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td><?php echo $row['birthdate']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact_number']; ?></td>
                    </tr>


            <?php
                }
            }
            ?>
        </tbody>

    </table>
</div>