<?php
ob_start();
include("partials/head.php");
include("partials/nav.php");
include("metalabsdb.php");
?>

<section class="container mx-auto mt-[100px]">
    <div class="border p-6 mx-5 md:p-8 shadow-md rounded-[24px]">
        <div class="flex items-center justify-between gap-x-3">
            <h2 class="text-lg font-medium text-gray-800">Archives</h2>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 px-6">
                    <div class="overflow-hidden border border-gray-200  md:rounded-lg ">
                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        ID</th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Name</th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Course</th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Birthdate</th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Contact Number</th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Restore</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200  ">
                                <?php
                                $query = "SELECT * FROM `student_archive`";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die("query failed" . mysqli_error());
                                } else {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap"><?= $row['id']; ?>
                                    </td>
                                    <td class="pl-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['name']; ?></td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['course']; ?></td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['birthdate']; ?></td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= "+63" . $row['contact_number']; ?></td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6 ">

                                            <a href="archives.php?id=<?php echo $row['id']; ?>"
                                                class="flex flex-row gap-x-1 text-gray-500 transition-colors duration-200 hover:text-yellow-500 focus:outline-none">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5" fill="rgba(126,126,126,1)">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path
                                                        d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                    </path>
                                                </svg>

                                                <span>
                                                    Restore Student
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





        <!-- PAGINATION DIV -->
        <div class="flex items-center justify-between mt-6">
            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="items-center hidden lg:flex gap-x-3">
                <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md  bg-blue-100/60">1</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">2</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">3</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">...</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">12</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">13</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md   hover:bg-gray-100">14</a>
            </div>

            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
        <!-- END OF PAGINATION DIV -->


    </div>
</section>

<?php
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

            header('Location: archives.php?restore_msg=You have restored a record!');
            exit();
        }

        ob_end_flush();
    }
}

if (isset($_GET['restore_msg'])) {
    echo "<h6>" . $_GET['restore_msg'] . "</h6>";
}

include("partials/footer.php");
?>