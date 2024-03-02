<?php
include("partials/head.php");
include("partials/nav.php");
include("metalabsdb.php");
?>

<script>
var studentCourses = {
    "College of Engineering Education": {
        "Bachelor of Science in Chemical Engineering": [],
        "Bachelor of Science in Mechanical Engineering": [],
        "Bachelor of Science in Electrical Engineering": [],
        "Bachelor of Science in Computer Engineering": [],
        "Bachelor of Science in Civil Engineering": [],
    },
    "College of Computing Education": {
        "Bachelor of Science in Computer Science": [],
        "Bachelor of Science in Information Systems": [],
        "Bachelor of Science in Information Technology": [],
        "Bachelor of Science in Entertainment and Multimedia Computing": [],
        "Bachelor of Science in Multimedia Arts": [],
    },
    "College of Arts and Science Education": {
        "Bachelor of Science in Environmental Science": [],
        "Bachelor of Science in Mathematics": [],
        "Bachelor of Science in Psychology": [],
        "Bachelor of Science in Social Work": [],
        "Bachelor of Science in Forestry": [],
    },
    "College of Accounting Education": {
        "Bachelor of Science in Accountancy": [],
        "Bachelor of Science in Accounting Technology": [],
        "Bachelor of Science in Accounting Information System": [],
        "Bachelor of Science in Internal Auditing": [],
        "Bachelor of Science in Management Accounting": [],
    }
}
window.onload = function() {
    var departSel = document.getElementById("department");
    var coursesSel = document.getElementById("courses");
    for (var x in studentCourses) {
        departSel.options[departSel.options.length] = new Option(x, x);
    }
    departSel.onchange = function() {
        //empty Chapters- and Topics- dropdowns
        coursesSel.length = 1;
        //display correct values
        for (var y in studentCourses[this.value]) {
            coursesSel.options[coursesSel.options.length] = new Option(y, y);
        }
    }
}
</script>

<form action="insert_data.php" method="post">
    <div
        class="space-y-12 border p-10 sm:rounded-[24px] sm:my-10 sm:mx-10 lg:mx-36 lg:my-10 md:p-8 lg:p-10 md:m-10 shadow-md rounded-[0] md:rounded-[24px] lg:rounded-[24px]">
        <div class=" pb-12">

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-lg font-semibold leading-7 text-gray-900">Student Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Every input should be filled out with an appropriate
                    student information.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First
                            name</label>
                        <div class="mt-2">
                            <input type="text" name="fName" id="first-name" autocomplete="given-name"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last
                            name</label>
                        <div class="mt-2">
                            <input type="text" name="lName" id="last-name" autocomplete="family-name"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Birth
                            Date</label>
                        <div class="mt-2">
                            <input type="date" name="birthDate" id="birthDate"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="contact-num" class="block text-sm font-medium leading-6 text-gray-900">Contact
                            Number</label>
                        <div class="mt-2">
                            <input id="contact-num" name="contactNum" type="number"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                        <div class="mt-2">
                            <select id="gender" name="gender"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset  sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-span-full">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street
                            address</label>
                        <div class="mt-2">
                            <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State /
                            Province</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal
                            code</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

            </div>

            <div class="pt-10 border-b border-gray-900/10 pb-12">
                <h2 class="text-lg font-semibold leading-7 text-gray-900">Course</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Choose the department, college course, and year level of
                    the student.</p>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                    <div class="sm:col-span-2">
                        <label for="department"
                            class="block text-sm font-medium leading-6 text-gray-900">Department</label>
                        <div class="mt-2">
                            <select name="department" id="department"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset  sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="" selected="selected">Select Department</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="courses" class="block text-sm font-medium leading-6 text-gray-900">Courses</label>
                        <div class="mt-2">
                            <select id="courses" name="courses"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset  sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="" selected="selected">Select Course</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="yearLevel" class="block text-sm font-medium leading-6 text-gray-900">Year
                            Level</label>
                        <div class="mt-2">
                            <select id="yearLevel" name="yearLevel"
                                class="px-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset  sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Select Year Level</option>
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                                <option>5th Year</option>
                                <option>Beyond</option>
                            </select>
                        </div>
                    </div>

                </div>


            </div>
        </div>



        <div class="mt-6 flex items-center justify-end gap-x-4">
            <a href="index.php" action="index.php"
                class="border rounded-md px-7 py-1 border-gray-400 text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <input value="Add Student" type="submit" name="addStudents"
                class="cursor-pointer rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" />

        </div>
</form>

<?php
include("partials/footer.php");
?>