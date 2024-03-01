<?php include("partials/head.php") ?>
<?php include("partials/nav.php") ?>
<?php include("metalabsdb.php") ?>

<?php
if (isset($_GET['insert_msg'])) {
?>

    <div class="w-full text-white bg-emerald-500">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <div class="flex">
                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                </svg>

                <p class="mx-3"><?php echo $_GET['insert_msg'] ?></p>
            </div>

            <button id="closeButton" class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
            var parentDiv = this.closest('.w-full');
            parentDiv.style.display = "none";
        });
    </script>


<?php
}
?>

<div class="flex items-center gap-x-2">
    <input type="text" id="searchInput" class="border p-2 rounded-md focus:outline-none" placeholder="Search...">
    <button id="searchButton" class="flex items-center px-5 py-2 text-sm text-white capitalize transition-colors duration-200 bg-blue-500 border rounded-md gap-x-2 hover:bg-blue-400">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Search</span>
    </button>
</div>

<section class="container mx-auto mt-[100px]">
    <div class="border p-6 mx-5 md:p-8 shadow-md rounded-[24px]">
        <div class="flex items-center justify-between gap-x-3">
            <h2 class="text-lg font-medium text-gray-800">Enrollment</h2>
            <a href="addStudentPageDecoy.php" class="flex items-center px-5 py-2 text-sm text-white capitalize transition-colors duration-200 bg-blue-500 border rounded-md gap-x-2 hover:bg-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>
                    Add Student
                </span>
            </a>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 px-6">
                    <div class="overflow-hidden border border-gray-200  md:rounded-lg ">
                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        ID</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Name</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Course</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Birthdate</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Contact Number</th>
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Modify</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200  ">
                                <?php
                                $query = "SELECT * FROM `student_enrollment`";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die("query failed" . mysqli_error());
                                } else {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap"><?= $row['id']; ?>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <?= $row['first_name'] . " " .  $row['last_name']; ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <?= $row['course']; ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <?= $row['birthdate']; ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                                <?= "+63" . $row['contact_number']; ?></td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6 ">
                                                    <a href="" class="flex flex-row gap-x-3 text-gray-500 transition-colors duration-200 hover:text-yellow-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                        <span>
                                                            Edit Student
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
            <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
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

            <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100    ">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
        <!-- END OF PAGINATION DIV -->


    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').keyup(function() {
            var searchText = $(this).val().toLowerCase();
            $('tbody tr').hide();
            $('tbody tr').each(function() {
                var rowText = $(this).text().toLowerCase();
                if (rowText.indexOf(searchText) !== -1) {
                    $(this).show();
                }
            });
        });
    });
</script>


<?php
if (isset($_GET['message'])) {
    echo "<h6>" . $_GET['message'] . "</h6>";
}
if (isset($_GET['insert_msg']) || isset($_GET['update_msg']) || isset($_GET['delete_msg'])) {
    echo "<h6 class='addSuccess'>" . ($_GET['insert_msg'] ?? $_GET['update_msg'] ?? $_GET['delete_msg']) . "</h6>";
}
?>