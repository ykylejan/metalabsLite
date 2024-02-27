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
                <th>Configure</th>

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
                        <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td><?php echo $row['birthdate']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact_number']; ?></td>
                        <td><a href="archives_page.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Restore</a></td>
                    </tr>


            <?php
                }
            }
            ?>
        </tbody>

    </table>
</div>



<?php
// if (isset($_GET['id'])) {
//     echo "id get: " . $_GET['id'];
// }


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `student_archive` WHERE `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("query failed");
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $birthdate = $row['birthdate'];
            $address = $row['address'];
            $contactNumber = $row['contact_number'];
            $course = $row['course'];
        }

        if (isset($_GET['id'])) {
            $query = "INSERT INTO `student_enrollment` (`id`, `first_name`, `last_name`, `birthdate`, `address`, `contact_number`, `course`) values
            ('$id', '$firstName', '$lastName', '$birthdate', '$address', '$contactNumber', '$course')";
            $result = mysqli_query($connection, $query);  
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "DELETE FROM `student_archive` WHERE `id` = '$id'";
            $result = mysqli_query($connection, $query);

            header('Location: archives_page.php?restore_msg=You have restored a record!');
            
        }
        
    }
}

if (isset($_GET['restore_msg'])) {
    echo "<h6>" . $_GET['restore_msg'] . "</h6>";
}

?>