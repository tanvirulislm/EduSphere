<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EduSphere | Modern Learning Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Font for logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Borel&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .logo {
            font-family: 'Borel', sans-serif !important;
        }
    </style>
</head>

<body class="bg-white text-gray-900">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-white border-b border-gray-100 bg-opacity-90 backdrop-blur-sm shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i data-feather="book-open" class="h-6 w-6 text-gray-900"></i>
                        <span class="ml-2 text-xl font-bold logo mt-3">Madrasha</span>
                    </div>
                    <!-- Desktop Navigation -->
                    <div class="hidden md:ml-10 md:flex md:space-x-8">
                        <a href="/" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="course.php" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Courses</a>
                        <a href="contact.php" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact Us</a>
                        <a href="about.php" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">About</a>
                    </div>
                </div>

                <!-- Desktop Auth Buttons -->
                <div class="hidden md:flex items-center">
                    <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Log in</button>
                    <button class="ml-4 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-900 hover:bg-gray-800">Sign up</button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex items-center md:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <i data-feather="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="/" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Home</a>
                <a href="course.php" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Courses</a>
                <a href="contact.php" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Contact Us</a>
                <a href="about.php" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">About</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="mt-3 space-y-1 px-2">
                    <button class="block w-full px-4 py-2 text-left text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Log in</button>
                    <button class="block w-full px-4 py-2 text-left text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Sign up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Course Details Page -->
    <div class="bg-white">
        <!-- Course Header -->
        <div class="bg-gray-900 py-16 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="md:w-2/3">
                        <span class="inline-block px-3 py-1 text-sm font-semibold text-gray-900 bg-yellow-400 rounded-full mb-4"> Bestseller </span>
                        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">Modern JavaScript Fundamentals</h1>
                        <p class="mt-3 text-xl text-gray-300">Master JavaScript ES6+ with real-world projects, exercises, and expert guidance.</p>
                        <div class="mt-6 flex flex-wrap items-center gap-4">
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <i data-feather="star" class="h-5 w-5 text-yellow-400"></i>
                                    <i data-feather="star" class="h-5 w-5 text-yellow-400"></i>
                                    <i data-feather="star" class="h-5 w-5 text-yellow-400"></i>
                                    <i data-feather="star" class="h-5 w-5 text-yellow-400"></i>
                                    <i data-feather="star" class="h-5 w-5 text-yellow-400"></i>
                                </div>
                                <span class="ml-2 text-gray-300">4.9 (1,245 reviews)</span>
                            </div>
                            <div class="flex items-center">
                                <i data-feather="users" class="h-5 w-5 text-gray-300"></i>
                                <span class="ml-2 text-gray-300">5,300+ students enrolled</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 md:mt-0 md:w-1/3">
                        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                            <div class="p-6">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <span class="text-3xl font-bold text-gray-900">$49.99</span>
                                        <span class="ml-2 text-lg line-through text-gray-500">$99.99</span>
                                    </div>
                                    <span class="inline-block px-2 py-1 text-xs font-semibold text-white bg-red-500 rounded"> 50% OFF </span>
                                </div>
                                <p class="mt-2 text-green-600 text-sm font-medium">
                                    <i data-feather="clock" class="h-4 w-4 inline mr-1"></i>
                                    Limited time offer
                                </p>

                                <button class="mt-6 w-full flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-gray-800">
                                    Enroll Now
                                    <i data-feather="shopping-cart" class="ml-2 h-5 w-5"></i>
                                </button>

                                <div class="mt-6 border-t border-gray-200 pt-6">
                                    <h3 class="text-sm font-medium text-gray-900">This course includes:</h3>
                                    <ul class="mt-4 space-y-3">
                                        <li class="flex items-start">
                                            <i data-feather="video" class="h-5 w-5 text-gray-900 flex-shrink-0"></i>
                                            <span class="ml-3 text-gray-700">12 hours on-demand video</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i data-feather="file-text" class="h-5 w-5 text-gray-900 flex-shrink-0"></i>
                                            <span class="ml-3 text-gray-700">18 downloadable resources</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i data-feather="award" class="h-5 w-5 text-gray-900 flex-shrink-0"></i>
                                            <span class="ml-3 text-gray-700">Certificate of completion</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i data-feather="smartphone" class="h-5 w-5 text-gray-900 flex-shrink-0"></i>
                                            <span class="ml-3 text-gray-700">Access on mobile and TV</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Content -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Course Tabs -->
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex space-x-8">
                            <button class="tab-button border-b-2 border-gray-900 text-gray-900 whitespace-nowrap py-4 px-1 text-sm font-medium">Overview</button>
                            <button class="tab-button border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 text-sm font-medium">Curriculum</button>
                            <button class="tab-button border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 text-sm font-medium">Instructor</button>
                            <button class="tab-button border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 text-sm font-medium">Reviews</button>
                        </nav>
                    </div>

                    <!-- Tab Content: Overview -->
                    <div id="overview-tab" class="tab-content py-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">About This Course</h2>
                        <div class="prose max-w-none text-gray-700">
                            <p>This comprehensive JavaScript course takes you from beginner to advanced concepts with hands-on projects. You'll learn modern ES6+ features, asynchronous programming, DOM manipulation, and build real-world applications.</p>

                            <h3 class="text-xl font-bold text-gray-900 mt-8">What You'll Learn</h3>
                            <ul class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="h-5 w-5 text-green-500 mt-0.5 mr-2"></i>
                                    <span>Core JavaScript fundamentals and ES6+ features</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="h-5 w-5 text-green-500 mt-0.5 mr-2"></i>
                                    <span>Asynchronous programming with Promises & Async/Await</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="h-5 w-5 text-green-500 mt-0.5 mr-2"></i>
                                    <span>DOM manipulation and event handling</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="h-5 w-5 text-green-500 mt-0.5 mr-2"></i>
                                    <span>Modern tooling (Webpack, Babel, ESLint)</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="h-5 w-5 text-green-500 mt-0.5 mr-2"></i>
                                    <span>Build 5 real-world projects</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check-circle" class="h-5 w-5 text-green-500 mt-0.5 mr-2"></i>
                                    <span>Debugging and performance optimization</span>
                                </li>
                            </ul>

                            <h3 class="text-xl font-bold text-gray-900 mt-8">Course Projects</h3>
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <div class="bg-gray-100 rounded-md h-32 mb-4 flex items-center justify-center">
                                        <i data-feather="code" class="h-12 w-12 text-gray-400"></i>
                                    </div>
                                    <h4 class="font-medium text-gray-900">Weather App</h4>
                                    <p class="mt-1 text-gray-600 text-sm">Fetch and display weather data from API</p>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <div class="bg-gray-100 rounded-md h-32 mb-4 flex items-center justify-center">
                                        <i data-feather="shopping-cart" class="h-12 w-12 text-gray-400"></i>
                                    </div>
                                    <h4 class="font-medium text-gray-900">E-commerce Cart</h4>
                                    <p class="mt-1 text-gray-600 text-sm">Interactive shopping cart with localStorage</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Content: Curriculum (Hidden by default) -->
                    <div id="curriculum-tab" class="tab-content py-8 hidden">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Course Curriculum</h2>
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <!-- Module 1 -->
                            <div class="border-b border-gray-200">
                                <button class="accordion-toggle w-full flex justify-between items-center p-4 text-left bg-gray-50 hover:bg-gray-100">
                                    <div class="flex items-center">
                                        <span class="font-medium text-gray-900">Module 1: JavaScript Fundamentals</span>
                                    </div>
                                    <i data-feather="chevron-down" class="h-5 w-5 text-gray-500 transform transition-transform"></i>
                                </button>
                                <div class="accordion-content hidden px-4 pb-4">
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                                            <div class="flex items-center">
                                                <i data-feather="play-circle" class="h-5 w-5 text-gray-400 mr-3"></i>
                                                <span class="text-gray-700">Introduction to JavaScript</span>
                                            </div>
                                            <span class="text-sm text-gray-500">15 min</span>
                                        </div>
                                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                                            <div class="flex items-center">
                                                <i data-feather="play-circle" class="h-5 w-5 text-gray-400 mr-3"></i>
                                                <span class="text-gray-700">Variables and Data Types</span>
                                            </div>
                                            <span class="text-sm text-gray-500">22 min</span>
                                        </div>
                                        <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded">
                                            <div class="flex items-center">
                                                <i data-feather="edit" class="h-5 w-5 text-blue-400 mr-3"></i>
                                                <span class="text-gray-700">Practice Exercise: Calculator</span>
                                            </div>
                                            <span class="text-sm text-gray-500">30 min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module 2 -->
                            <div class="border-b border-gray-200">
                                <button class="accordion-toggle w-full flex justify-between items-center p-4 text-left bg-gray-50 hover:bg-gray-100">
                                    <div class="flex items-center">
                                        <span class="font-medium text-gray-900">Module 2: Functions & Scope</span>
                                    </div>
                                    <i data-feather="chevron-down" class="h-5 w-5 text-gray-500 transform transition-transform"></i>
                                </button>
                                <div class="accordion-content hidden px-4 pb-4">
                                    <!-- Content would go here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="mt-12 lg:mt-0">
                    <div class="bg-gray-50 rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Course Details</h3>
                        <div class="space-y-4">
                            <div class="flex">
                                <i data-feather="clock" class="h-5 w-5 text-gray-500 mt-0.5 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Duration</p>
                                    <p class="text-gray-900">12 hours total</p>
                                </div>
                            </div>
                            <div class="flex">
                                <i data-feather="bar-chart-2" class="h-5 w-5 text-gray-500 mt-0.5 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Level</p>
                                    <p class="text-gray-900">Beginner to Intermediate</p>
                                </div>
                            </div>
                            <div class="flex">
                                <i data-feather="calendar" class="h-5 w-5 text-gray-500 mt-0.5 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Last Updated</p>
                                    <p class="text-gray-900">June 15, 2023</p>
                                </div>
                            </div>
                            <div class="flex">
                                <i data-feather="globe" class="h-5 w-5 text-gray-500 mt-0.5 mr-3"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Language</p>
                                    <p class="text-gray-900">English</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Who This Course Is For</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i data-feather="check" class="h-4 w-4 text-green-500 mt-0.5 mr-2"></i>
                                    <span class="text-gray-700">Beginners learning JavaScript</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check" class="h-4 w-4 text-green-500 mt-0.5 mr-2"></i>
                                    <span class="text-gray-700">Web developers refreshing skills</span>
                                </li>
                                <li class="flex items-start">
                                    <i data-feather="check" class="h-4 w-4 text-green-500 mt-0.5 mr-2"></i>
                                    <span class="text-gray-700">Bootcamp students needing extra practice</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Instructor Preview -->
                    <div class="mt-6 bg-gray-50 rounded-xl p-6 shadow-sm">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Instructor</h3>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="w-16 h-16 rounded-full" />
                            <div class="ml-4">
                                <h4 class="font-medium text-gray-900">Sarah Johnson</h4>
                                <p class="text-gray-600 text-sm">Senior JavaScript Developer</p>
                                <div class="flex mt-1">
                                    <i data-feather="star" class="h-4 w-4 text-yellow-400"></i>
                                    <span class="text-gray-700 text-sm ml-1">4.9 Instructor Rating</span>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 text-sm">With 10+ years of experience building web applications, Sarah has taught over 50,000 students and worked with companies like Google and Airbnb.</p>
                        <button class="mt-4 text-sm font-medium text-gray-900 hover:text-gray-600 flex items-center">
                            View full profile
                            <i data-feather="arrow-right" class="h-4 w-4 ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Courses</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Instructors</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Pricing</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Blog</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Contact</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Privacy</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900">Terms</a>
                </div>
            </nav>
            <div class="mt-8 flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i data-feather="facebook" class="h-6 w-6"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i data-feather="instagram" class="h-6 w-6"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i data-feather="twitter" class="h-6 w-6"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i data-feather="github" class="h-6 w-6"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i data-feather="linkedin" class="h-6 w-6"></i>
                </a>
            </div>
            <!-- Payments -->
            <div class="mt-8 flex justify-center">
                <img src="Pay-With-logo.webp" alt="Workcation" class="" />
            </div>
            <p class="mt-8 text-center text-base text-gray-400">&copy; 2023 EduSphere, Inc. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Feather Icons
            feather.replace()

            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button')
            const mobileMenu = document.getElementById('mobile-menu')

            mobileMenuButton.addEventListener('click', function() {
                const isExpanded = mobileMenu.classList.toggle('hidden')

                // Change icon based on menu state
                const icon = mobileMenuButton.querySelector('i')
                if (isExpanded) {
                    icon.setAttribute('data-feather', 'menu')
                } else {
                    icon.setAttribute('data-feather', 'x')
                }
                feather.replace()
            })

            // Close mobile menu when clicking on a link
            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden')
                    mobileMenuButton.querySelector('i').setAttribute('data-feather', 'menu')
                    feather.replace()
                })
            })
        })
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Feather Icons
            feather.replace()

            // Tab Switching
            const tabs = document.querySelectorAll('.tab-button')
            const tabContents = document.querySelectorAll('.tab-content')

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active state from all tabs
                    tabs.forEach(t => {
                        t.classList.remove('border-gray-900', 'text-gray-900')
                        t.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300')
                    })

                    // Add active state to clicked tab
                    tab.classList.add('border-gray-900', 'text-gray-900')
                    tab.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300')

                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden')
                    })

                    // Show selected tab content
                    const tabId = tab.textContent.trim().toLowerCase() + '-tab'
                    document.getElementById(tabId).classList.remove('hidden')
                })
            })

            // Accordion Functionality
            const accordions = document.querySelectorAll('.accordion-toggle')
            accordions.forEach(accordion => {
                accordion.addEventListener('click', () => {
                    const content = accordion.nextElementSibling
                    const icon = accordion.querySelector('i')

                    content.classList.toggle('hidden')
                    icon.classList.toggle('rotate-180')
                })
            })
        })
    </script>
</body>

</html>