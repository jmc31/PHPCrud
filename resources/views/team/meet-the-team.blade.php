@extends('layouts.app')

@section('content')
    <!-- Team -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Meet the 6k MMR crew</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Stupid people</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Jan Michael Cabahug
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Founder / CEO
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/JaniiBravo?_rdr" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Amil Evara
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            UI/UX Designer
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/Hannahbyyyy" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Jhun Kenneth Curacha
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Support Consultant
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/jhun.kenneth.1" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            James David Guba
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Director of sales
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/zukarinkuari.kun.9" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Derick Aton
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Front-end Developer
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/profile.php?id=61554733957110" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Jasper Tabanag
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            UI/UX Designer
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.google.com/search?sca_esv=a5203e152adc2835&sxsrf=ADLYWIKxdBq_prUrQ-WPd__9yPTkZNCrRQ:1732970180733&q=oldest+man&udm=2&fbs=AEQNm0Aa4sjWe7Rqy32pFwRj0UkWd8nbOJfsBGGB5IQQO6L3JzWreY9LW7LdGrLDAFqYDH3DF_waBUhtl7i7Xh3ndQb6Fn8zyWqVNDC6kxH2uU5tjMxNiRyN0Tu_IJ5U2F44t3g61CzFz2JBWAhJTb-xht_6LzY7f4dcpMn6CNH9wv57t_WlU8aPuzkPZ1e9zslXUCZi2jsHKdTxN4R4G2ipTlnIkLhU4A&sa=X&ved=2ahUKEwjDpZ2AiYSKAxXIp1YBHRy3JxQQtKgLegQIEhAB&biw=1920&bih=945&dpr=1#vhid=D5FTYmoukBqnxM&vssid=mosaic" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Kenlloyd Brazal
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Support Consultant
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/kentoy.brazal" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20"
                    src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">

                <div class="grow">
                    <div>
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Roswell Ceniza
                        </h3>
                        <p class="mt-1 text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Project Manager
                        </p>
                    </div>

                    <!-- Social Brands -->
                    <div class="mt-2 sm:mt-auto space-x-2.5">
                        <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="https://www.facebook.com/roswellrey.ceniza.961" target="_blank">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.98 2.91 7.33 6.71 7.93v-5.6h-2v-2.33h2v-1.73c0-2.08 1.24-3.25 3.14-3.25.92 0 1.92.18 1.92.18v2.11h-1.08c-1.07 0-1.41.66-1.41 1.34v1.67h2.38l-.38 2.33h-2v5.6c3.8-.6 6.71-3.95 6.71-7.93 0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End Social Brands -->
                </div>
            </div>
            <!-- End Col -->

            <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
                <img class="rounded-lg size-20" src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">

                <div class="grow">
                    <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                        We are hiring!
                    </h3>
                    <a class="text-sm text-blue-600 decoration-2 hover:underline dark:text-blue-500" href="#">
                        Check out / Careers
                    </a>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Team -->
@endsection
