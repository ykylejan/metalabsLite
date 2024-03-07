<?php include("partials/head.php") ?>
<?php include("partials/nav.php") ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <style>
        @keyframes popupAnimation {
            0% {
                opacity: 0;
                transform: translateY(50%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated-p {
            animation: popupAnimation 3s ease forwards;
        }

        .animated-h1 {
            animation: popupAnimation 3s ease forwards;
        }

        .animated-img {
            animation: popupAnimation 3s ease forwards;
        }
    </style>
</head>

<body>
    <section id="popupSection" class="bg-white">
        <section class="bg-white ">
            <div class="container px-24 py-12 mx-auto">
                <div class="lg:flex lg:items-center">
                    <div class="w-full space-y-12 lg:w-1/2 ">
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl e">about our <br> website project</h1>

                            <div class="mt-2">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                            </div>
                        </div>

                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-semibold text-gray-700 capitalize ">Functionality</h1>

                                <p class="mt-3 text-gray-500 ">
                                    MetaLABS Lite is a college student management system designed to address the intricacies of organizing and maintaining student records effectively.
                                </p>
                            </div>
                        </div>

                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-semibold text-gray-700 capitalize">Usability</h1>

                                <p class="mt-3 text-gray-500">
                                    With a focus on seamless user experience and straightforward functionality, MetaLABS Lite offers a comprehensive solution for educational institutions to manage their student data efficiently
                                </p>
                            </div>
                        </div>

                        <div class="md:flex md:items-start md:-mx-4">
                            <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                            <div class="mt-4 md:mx-4 md:mt-0">
                                <h1 class="text-xl font-semibold text-gray-700 capitalize">Scalability</h1>

                                <p class="mt-3 text-gray-500">
                                    Beyond its user-friendly design, MetaLABS Lite is engineered for scalability, capable of accommodating the evolving needs of educational institutions as they grow and expand.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                        <img class="w-[28rem] h-[28rem] object-cover xl:w-[34rem] xl:h-[34rem] rounded-full" src="https://img.freepik.com/free-vector/data-extraction-concept-illustration_114360-4876.jpg?t=st=1709730427~exp=1709734027~hmac=2f66149ccd82bd755cb8651e94f9665c7afde5a013bef4fe65f25bf292818328&w=740" alt="">
                    </div>
                </div>

                <hr class="my-12 border-gray-200 dark:border-gray-700">


            </div>
        </section>
    </section>
</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const headings = document.querySelectorAll("#popupSection h1");
        const paragraphs = document.querySelectorAll("#popupSection p");
        const image = document.querySelector("#popupSection img");

        headings.forEach(function(heading) {
            heading.classList.add("animated-h1");
        });

        paragraphs.forEach(function(paragraph) {
            paragraph.classList.add("animated-p");
        });

        image.classList.add("animated-img");
    });
</script>






<?php include("partials/footer.php") ?>