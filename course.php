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
                        <a href="course.php" class="border-gray-900 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Courses</a>
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
                <a href="course.php" class="bg-gray-50 border-gray-900 text-gray-900 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Courses</a>
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

    <!-- Course Filters -->
    <div class="bg-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Browse Courses</h1>
            <p class="text-gray-600 mb-8">Find the perfect course for your goals</p>

            <!-- Filter Bar -->
            <div class="bg-gray-50 rounded-lg p-4 mb-8 shadow-sm">
                <div class="flex flex-wrap gap-4">
                    <!-- Category Filter -->
                    <div class="relative">
                        <button id="categoryBtn" class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i data-feather="grid" class="h-4 w-4 mr-2"></i>
                            Category
                            <i data-feather="chevron-down" class="h-4 w-4 ml-2"></i>
                        </button>
                        <div id="categoryDropdown" class="hidden absolute z-10 mt-2 w-56 bg-white rounded-md shadow-lg border border-gray-200">
                            <div class="p-2">
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="category" value="all" checked />
                                    <span class="ml-2 text-gray-700">All Categories</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="category" value="web-dev" />
                                    <span class="ml-2 text-gray-700">Web Development</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="category" value="data-science" />
                                    <span class="ml-2 text-gray-700">Data Science</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="category" value="design" />
                                    <span class="ml-2 text-gray-700">Design</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Level Filter -->
                    <div class="relative">
                        <button id="levelBtn" class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i data-feather="bar-chart-2" class="h-4 w-4 mr-2"></i>
                            Level
                            <i data-feather="chevron-down" class="h-4 w-4 ml-2"></i>
                        </button>
                        <div id="levelDropdown" class="hidden absolute z-10 mt-2 w-56 bg-white rounded-md shadow-lg border border-gray-200">
                            <div class="p-2">
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="level" value="all" checked />
                                    <span class="ml-2 text-gray-700">All Levels</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="level" value="beginner" />
                                    <span class="ml-2 text-gray-700">Beginner</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="level" value="intermediate" />
                                    <span class="ml-2 text-gray-700">Intermediate</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="level" value="advanced" />
                                    <span class="ml-2 text-gray-700">Advanced</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="relative">
                        <button id="priceBtn" class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i data-feather="dollar-sign" class="h-4 w-4 mr-2"></i>
                            Price
                            <i data-feather="chevron-down" class="h-4 w-4 ml-2"></i>
                        </button>
                        <div id="priceDropdown" class="hidden absolute z-10 mt-2 w-56 bg-white rounded-md shadow-lg border border-gray-200">
                            <div class="p-2">
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="price" value="all" checked />
                                    <span class="ml-2 text-gray-700">All Prices</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="price" value="free" />
                                    <span class="ml-2 text-gray-700">Free</span>
                                </label>
                                <label class="flex items-center px-3 py-2 rounded hover:bg-gray-100 cursor-pointer">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-900" data-filter="price" value="paid" />
                                    <span class="ml-2 text-gray-700">Paid</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Reset Button -->
                    <button id="resetFilters" class="ml-auto flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200">
                        <i data-feather="refresh-ccw" class="h-4 w-4 mr-2"></i>
                        Reset Filters
                    </button>
                </div>

                <!-- Active Filters (will appear when filters are selected) -->
                <div id="activeFilters" class="mt-4 hidden">
                    <div class="flex flex-wrap gap-2">
                        <!-- Example active filter (dynamically added via JS) -->
                        <!-- <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
              Web Development
              <button class="ml-1 text-gray-500 hover:text-gray-700">
                <i data-feather="x" class="h-3 w-3"></i>
              </button>
            </span> -->
                    </div>
                </div>
            </div>

            <!-- Course Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course 1 -->
                <a href="coursedetails.php" class="course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-100" data-category="web-dev" data-level="beginner" data-price="paid">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Web Development" class="w-full h-48 object-cover" />
                        <span class="absolute top-2 right-2 bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full font-medium"> Bestseller </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-900 bg-gray-100 rounded">Web Dev</span>
                            <span class="ml-2 text-xs text-gray-500">Beginner</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Modern JavaScript Fundamentals</h3>
                        <p class="text-gray-600 text-sm mb-4">Master JavaScript ES6+ with real-world projects and exercises.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i data-feather="clock" class="h-4 w-4 text-gray-400 mr-1"></i>
                                <span class="text-xs text-gray-500">12 hours</span>
                            </div>
                            <span class="text-lg font-bold text-gray-900">$49.99</span>
                        </div>
                    </div>
                </a>

                <!-- Course 2 -->
                <div class="course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-100" data-category="data-science" data-level="intermediate" data-price="paid">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Data Science" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-900 bg-gray-100 rounded">Data Science</span>
                            <span class="ml-2 text-xs text-gray-500">Intermediate</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Python for Data Analysis</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn Pandas, NumPy, and visualization libraries with real datasets.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i data-feather="clock" class="h-4 w-4 text-gray-400 mr-1"></i>
                                <span class="text-xs text-gray-500">18 hours</span>
                            </div>
                            <span class="text-lg font-bold text-gray-900">$79.99</span>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-100" data-category="design" data-level="beginner" data-price="free">
                    <img src="https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="UI/UX Design" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-900 bg-gray-100 rounded">Design</span>
                            <span class="ml-2 text-xs text-gray-500">Beginner</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">UI/UX Design Principles</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn the fundamentals of user-centered design.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i data-feather="clock" class="h-4 w-4 text-gray-400 mr-1"></i>
                                <span class="text-xs text-gray-500">8 hours</span>
                            </div>
                            <span class="text-lg font-bold text-green-600">Free</span>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-100" data-category="web-dev" data-level="advanced" data-price="paid">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="React Advanced" class="w-full h-48 object-cover" />
                        <span class="absolute top-2 right-2 bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-medium"> New </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-900 bg-gray-100 rounded">Web Dev</span>
                            <span class="ml-2 text-xs text-gray-500">Advanced</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Advanced React Patterns</h3>
                        <p class="text-gray-600 text-sm mb-4">Master hooks, context, and performance optimization.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i data-feather="clock" class="h-4 w-4 text-gray-400 mr-1"></i>
                                <span class="text-xs text-gray-500">15 hours</span>
                            </div>
                            <span class="text-lg font-bold text-gray-900">$89.99</span>
                        </div>
                    </div>
                </div>

                <!-- Course 5 -->
                <div class="course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-100" data-category="data-science" data-level="intermediate" data-price="paid">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Machine Learning" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-900 bg-gray-100 rounded">Data Science</span>
                            <span class="ml-2 text-xs text-gray-500">Intermediate</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Machine Learning Basics</h3>
                        <p class="text-gray-600 text-sm mb-4">Introduction to ML algorithms with scikit-learn.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i data-feather="clock" class="h-4 w-4 text-gray-400 mr-1"></i>
                                <span class="text-xs text-gray-500">20 hours</span>
                            </div>
                            <span class="text-lg font-bold text-gray-900">$99.99</span>
                        </div>
                    </div>
                </div>

                <!-- Course 6 -->
                <div class="course-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-100" data-category="design" data-level="beginner" data-price="free">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Figma Basics" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-900 bg-gray-100 rounded">Design</span>
                            <span class="ml-2 text-xs text-gray-500">Beginner</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Figma for Beginners</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn to design and prototype with Figma.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i data-feather="clock" class="h-4 w-4 text-gray-400 mr-1"></i>
                                <span class="text-xs text-gray-500">6 hours</span>
                            </div>
                            <span class="text-lg font-bold text-green-600">Free</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination (optional) -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <button class="px-3 py-1 rounded border border-gray-300 text-gray-500 hover:bg-gray-50">
                        <i data-feather="chevron-left" class="h-4 w-4"></i>
                    </button>
                    <button class="px-3 py-1 rounded border border-gray-300 bg-gray-900 text-white">1</button>
                    <button class="px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50">2</button>
                    <button class="px-3 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-50">3</button>
                    <button class="px-3 py-1 rounded border border-gray-300 text-gray-500 hover:bg-gray-50">
                        <i data-feather="chevron-right" class="h-4 w-4"></i>
                    </button>
                </nav>
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

            // Toggle dropdowns
            document.querySelectorAll('[id$="Btn"]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const dropdownId = btn.id.replace('Btn', 'Dropdown')
                    document.getElementById(dropdownId).classList.toggle('hidden')
                })
            })

            // Close dropdowns when clicking outside
            document.addEventListener('click', e => {
                if (!e.target.closest('.relative')) {
                    document.querySelectorAll('[id$="Dropdown"]').forEach(dropdown => {
                        dropdown.classList.add('hidden')
                    })
                }
            })

            // Filter functionality (simplified demo)
            const courseCards = document.querySelectorAll('.course-card')
            const filterCheckboxes = document.querySelectorAll('[data-filter]')
            const activeFiltersContainer = document.getElementById('activeFilters')
            const resetFiltersBtn = document.getElementById('resetFilters')

            function updateFilters() {
                const selectedFilters = {
                    category: [],
                    level: [],
                    price: [],
                }

                // Collect selected filters
                filterCheckboxes.forEach(checkbox => {
                    if (checkbox.checked && checkbox.value !== 'all') {
                        const filterType = checkbox.dataset.filter
                        selectedFilters[filterType].push(checkbox.value)
                    }
                })

                // Show/hide courses based on filters
                courseCards.forEach(card => {
                    const matchesCategory = selectedFilters.category.length === 0 || selectedFilters.category.includes(card.dataset.category)
                    const matchesLevel = selectedFilters.level.length === 0 || selectedFilters.level.includes(card.dataset.level)
                    const matchesPrice = selectedFilters.price.length === 0 || selectedFilters.price.includes(card.dataset.price)

                    if (matchesCategory && matchesLevel && matchesPrice) {
                        card.style.display = 'block'
                    } else {
                        card.style.display = 'none'
                    }
                })

                // Show active filters UI
                updateActiveFiltersUI(selectedFilters)
            }

            function updateActiveFiltersUI(filters) {
                const activeFilters = []
                for (const [type, values] of Object.entries(filters)) {
                    values.forEach(value => {
                        activeFilters.push({
                            type,
                            value
                        })
                    })
                }

                const activeFiltersElement = document.getElementById('activeFilters')
                const activeFiltersList = activeFiltersElement.querySelector('div')

                if (activeFilters.length > 0) {
                    activeFiltersElement.classList.remove('hidden')
                    activeFiltersList.innerHTML = ''

                    activeFilters.forEach(filter => {
                        const filterName = {
                            'web-dev': 'Web Dev',
                            'data-science': 'Data Science',
                            design: 'Design',
                            beginner: 'Beginner',
                            intermediate: 'Intermediate',
                            advanced: 'Advanced',
                            free: 'Free',
                            paid: 'Paid',
                        } [filter.value]

                        const filterElement = document.createElement('span')
                        filterElement.className = 'inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800'
                        filterElement.innerHTML = `
              ${filterName}
              <button class="ml-1 text-gray-500 hover:text-gray-700" data-filter-type="${filter.type}" data-filter-value="${filter.value}">
                <i data-feather="x" class="h-3 w-3"></i>
              </button>
            `
                        activeFiltersList.appendChild(filterElement)
                    })

                    // Add event listeners to remove buttons
                    document.querySelectorAll('[data-filter-type]').forEach(btn => {
                        btn.addEventListener('click', e => {
                            const filterType = btn.dataset.filterType
                            const filterValue = btn.dataset.filterValue
                            document.querySelector(`[data-filter="${filterType}"][value="${filterValue}"]`).checked = false
                            updateFilters()
                        })
                    })

                    feather.replace()
                } else {
                    activeFiltersElement.classList.add('hidden')
                }
            }

            // Reset all filters
            resetFiltersBtn.addEventListener('click', () => {
                filterCheckboxes.forEach(checkbox => {
                    checkbox.checked = checkbox.value === 'all'
                })
                updateFilters()
            })

            // Initialize filters
            filterCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateFilters)
            })
        })
    </script>
</body>

</html>