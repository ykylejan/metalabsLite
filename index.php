<?php include("partials/head.php") ?>
<?php include("partials/nav.php") ?>
<?php include("metalabsdb.php") ?>

<?php
if (isset($_GET['insert_msg']) || isset($_GET['update_msg'])) {
    ?>

<div class="w-full text-white bg-emerald-500 ">
    <div class="container flex items-center justify-between px-6 py-4 mx-auto">
        <div class="flex">
            <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                <path
                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z">
                </path>
            </svg>

            <?php
                if (isset($_GET['insert_msg'])) {
                    ?>
            <p class="mx-3">
                <?php echo $_GET['insert_msg'] ?>
            </p>

            <?php
                } else if (isset($_GET['update_msg'])) {
                    ?>
            <p class="mx-3">
                <?php echo $_GET['update_msg'] ?>
            </p>
            <?php
                } else {
                }
                ?>

        </div>

        <button id="closeButton"
            class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
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

<?php
if (isset($_GET['delete_msg'])) {
    ?>

<div class="w-full text-white bg-red-500">
    <div class="container flex items-center justify-between px-6 py-4 mx-auto">
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)" class="h-5 w-5">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                    d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM9 11V17H11V11H9ZM13 11V17H15V11H13ZM9 4V6H15V4H9Z">
                </path>
            </svg>

            <p class="mx-3">
                <?= $_GET['delete_msg'] ?>
            </p>
        </div>

        <button id="closeButton"
            class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
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



<section class="container mx-auto mt-[40px]">

    <div class="flex justify-center items-center gap-x-2 ml-5 mb-5 mr-5">
        <input type="text" id="searchInput"
            class="drop-shadow-sm border md:pl-6 md:pr-32 p-2 rounded-md focus:outline-none" placeholder="Search...">
        <button id="searchButton"
            class="shadow flex items-center px-5 py-2 text-sm text-white capitalize transition-colors duration-200 bg-blue-500 border rounded-md gap-x-2 hover:bg-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke-width="1.5"
                class="w-5 h-5">
                <path fill=" none" d="M0 0h24v24H0z"></path>
                <path
                    d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z">
                </path>
            </svg>
            <span>Search</span>
        </button>
    </div>

    <div class="border p-6 mx-5 md:p-8 shadow-md rounded-[24px]">
        <div class="flex items-center justify-between gap-x-3">
            <h2 class="text-lg font-medium text-gray-800">Enrollment</h2>
            <a href="addStudent.php"
                class="flex items-center px-5 py-2 text-sm text-white capitalize transition-colors duration-200 bg-blue-500 border rounded-md gap-x-2 hover:bg-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
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
                                        Modify</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200  ">
                                <?php

                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                $rowsPerPage = 6;

                                $query = "SELECT * FROM `student_enrollment` LIMIT " . ($page - 1) * $rowsPerPage . ", $rowsPerPage";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die("query failed" . mysqli_error());
                                } else {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['id']; ?>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['first_name'] . " " . $row['last_name']; ?>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['course']; ?>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= $row['birthdate']; ?>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500  whitespace-nowrap">
                                        <?= "+63" . $row['contact_number']; ?>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6 ">
                                            <a href="editStudent.php?id=<?php echo $row['id']; ?>"
                                                class="flex flex-row gap-x-3 text-gray-500 transition-colors duration-200 hover:text-yellow-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
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

                                $totalRowsQuery = "SELECT COUNT(*) as total FROM `student_enrollment`";
                                $totalResult = mysqli_query($connection, $totalRowsQuery);
                                $totalRows = mysqli_fetch_assoc($totalResult)['total'];
                                $totalPages = ceil($totalRows / $rowsPerPage);

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





        <!-- PAGINATION DIV -->
        <div class="flex items-center justify-between mt-6">
            <a href="?page=<?= max($page - 1, 1) ?>"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
                <span>previous</span>
            </a>

            <div class="items-center hidden lg:flex gap-x-3">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?= $i ?>"
                    class="px-2 py-1 text-sm <?= $i == $page ? 'text-blue-500' : 'text-gray-500' ?> rounded-md <?= $i == $page ? 'bg-blue-100/60' : 'hover:bg-gray-100' ?>">
                    <?= $i ?>
                </a>
                <?php endfor; ?>
            </div>

            <a href="?page=<?= min($page + 1, $totalPages) ?>"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <span>Next</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
        <!-- END OF PAGINATION DIV -->


    </div>
</section>

<!-- search bar script -->
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
// if (isset($_GET['insert_msg']) || isset($_GET['update_msg']) || isset($_GET['delete_msg'])) {
//     echo "<h6 class='addSuccess'>" . ($_GET['insert_msg'] ?? $_GET['update_msg'] ?? $_GET['delete_msg']) . "</h6>";
// }
?>