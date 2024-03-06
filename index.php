<?php include("partials/head.php"); ?>
<?php include("partials/nav.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page with Animation</title>
    <style>
        @keyframes pop-up {
            0% {
                opacity: 0;
                transform: translateY(50%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .pop-up {
            animation: pop-up 2s ease forwards;
        }
    </style>
</head>

<body>
    <section class="bg-white dark:bg-white">
        <div class="container px-6 py-16 mx-auto text-center">
            <div class="max-w-lg mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-800 lg:text-4xl pop-up">Manage your students' data with a simplified records manager</h1>
                <p class="mt-6 text-gray-500 dark:text-gray-500 pop-up">MetaLABS Lite redefines the paradigm of college student records management systems, offering a perfect blend of functionality, usability, and scalability</p>
                <a href="home.php">
                    <button class="px-5 py-2 mt-6 text-sm font-medium leading-5 text-center text-white capitalize bg-blue-600 rounded-lg hover:bg-blue-500 lg:mx-0 lg:w-auto focus:outline-none transition duration-300 ease-in-out transform hover:scale-105">
                        Get Started
                    </button>
                </a>
                <p class="mt-3 text-sm text-gray-400 ">No credit card required</p>
            </div>

            <div class="flex justify-center mt-10">
                <img class="object-cover w-full h-96 rounded-xl lg:w-4/5 pop-up" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" />
            </div>
        </div>
    </section>
</body>

</html>


<?php include("partials/footer.php"); ?>