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
                        <span class="ml-2 text-xl font-bold mt-3 logo">Madrasha</span>
                    </div>
                    <!-- Desktop Navigation -->
                    <div class="hidden md:ml-10 md:flex md:space-x-8">
                        <a href="/" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                        <a href="course.php" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Courses</a>
                        <a href="contact.php" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact Us</a>
                        <a href="about.php" class="border-gray-900 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">About</a>
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
                <a href="about.php" class="bg-gray-50 border-gray-900 text-gray-900 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">About</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="mt-3 space-y-1 px-2">
                    <button class="block w-full px-4 py-2 text-left text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Log in</button>
                    <button class="block w-full px-4 py-2 text-left text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Sign up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- About Page -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-base text-gray-900 font-semibold tracking-wide uppercase">About EduSphere</h2>
                <h1 class="mt-2 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Empowering learners since 2015</h1>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">We believe education should be accessible, flexible, and impactful.</p>
            </div>

            <!-- Mission Section -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 mb-20">
                <div class="mb-10 lg:mb-0">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Team working" class="rounded-lg shadow-lg w-full h-auto" />
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Mission</h3>
                    <p class="text-gray-700 mb-4">Founded in 2015, EduSphere was born from a simple idea: break down barriers to quality education. Today, we serve over 500,000 learners worldwide with courses designed for real-world impact.</p>
                    <p class="text-gray-700 mb-6">Our team of educators, engineers, and designers work tirelessly to create learning experiences that are engaging, effective, and accessible to all.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="inline-flex items-center px-5 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-gray-800">
                            Meet our instructors
                            <i data-feather="users" class="ml-2 h-5 w-5"></i>
                        </a>
                        <a href="#methodology" class="inline-flex items-center px-5 py-3 border border-gray-300 text-base font-medium rounded-md shadow-sm text-gray-900 bg-white hover:bg-gray-50">
                            Our methodology
                            <i data-feather="book-open" class="ml-2 h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="bg-gray-50 py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-gray-900 font-semibold tracking-wide uppercase">Trusted by learners worldwide</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Our impact in numbers</p>
                    </div>

                    <div class="mt-10">
                        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                            <div class="pt-6">
                                <div class="flow-root bg-white rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-gray-900 rounded-md shadow-lg">
                                                <i data-feather="users" class="h-6 w-6 text-white"></i>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">500K+</h3>
                                        <p class="mt-1 text-base text-gray-500">Active learners</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6">
                                <div class="flow-root bg-white rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-gray-900 rounded-md shadow-lg">
                                                <i data-feather="book" class="h-6 w-6 text-white"></i>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">5,000+</h3>
                                        <p class="mt-1 text-base text-gray-500">Courses</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6">
                                <div class="flow-root bg-white rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-gray-900 rounded-md shadow-lg">
                                                <i data-feather="award" class="h-6 w-6 text-white"></i>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">250+</h3>
                                        <p class="mt-1 text-base text-gray-500">Expert instructors</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-6">
                                <div class="flow-root bg-white rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-gray-900 rounded-md shadow-lg">
                                                <i data-feather="globe" class="h-6 w-6 text-white"></i>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">100+</h3>
                                        <p class="mt-1 text-base text-gray-500">Countries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mb-20">
                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Our Core Values</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Value 1 -->
                    <div class="bg-white border border-gray-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center mb-4">
                            <i data-feather="award" class="h-8 w-8 text-gray-900"></i>
                            <h4 class="ml-3 text-lg font-medium text-gray-900">Excellence</h4>
                        </div>
                        <p class="text-gray-700">We maintain the highest standards in curriculum design and instructional quality.</p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-white border border-gray-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center mb-4">
                            <i data-feather="globe" class="h-8 w-8 text-gray-900"></i>
                            <h4 class="ml-3 text-lg font-medium text-gray-900">Accessibility</h4>
                        </div>
                        <p class="text-gray-700">Courses designed for diverse learning needs, available anytime, anywhere.</p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-white border border-gray-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center mb-4">
                            <i data-feather="heart" class="h-8 w-8 text-gray-900"></i>
                            <h4 class="ml-3 text-lg font-medium text-gray-900">Community</h4>
                        </div>
                        <p class="text-gray-700">We foster connections between learners, mentors, and industry leaders.</p>
                    </div>
                </div>
                <div id="methodology"></div>
            </div>

            <!-- Our Methodology -->
            <div class="mb-20">
                <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                    <div class="mb-10 lg:mb-0">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Methodology</h3>
                        <div class="space-y-6">
                            <!-- Step 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0 bg-gray-900 rounded-full w-8 h-8 flex items-center justify-center">
                                    <div class="p-3">
                                        <i data-feather="book" class="h-5 w-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-900">Research-Backed Content</h4>
                                    <p class="mt-1 text-gray-700">Courses designed using proven pedagogical frameworks for maximum retention.</p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0 bg-gray-900 rounded-full w-8 h-8 flex items-center justify-center">
                                    <div class="p-3">
                                        <i data-feather="code" class="h-5 w-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-900">Project-Based Learning</h4>
                                    <p class="mt-1 text-gray-700">Apply concepts immediately with real-world projects and case studies.</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0 bg-gray-900 rounded-full w-8 h-8 flex items-center justify-center">
                                    <div class="p-3">
                                        <i data-feather="repeat" class="h-5 w-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-gray-900">Iterative Feedback</h4>
                                    <p class="mt-1 text-gray-700">Continuous improvement through learner and mentor evaluations.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-8">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Learning methodology" class="rounded-lg w-full h-auto shadow-md" />
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="bg-gray-900 rounded-xl p-10 text-center">
                <h3 class="text-2xl font-bold text-white mb-4">Ready to start learning?</h3>
                <p class="text-gray-300 mb-6 max-w-2xl mx-auto">Join thousands of learners transforming their careers with EduSphere.</p>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-gray-900 bg-white hover:bg-gray-100">
                    Browse courses
                    <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
                </a>
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
    </script>
</body>

</html>