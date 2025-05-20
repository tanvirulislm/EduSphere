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
                        <a href="contact.php" class="border-gray-900 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact Us</a>
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
                <a href="contact.php" class="bg-gray-50 border-gray-900 text-gray-900 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Contact Us</a>
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

    <!-- Contact Page -->
    <div class="bg-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-base font-semibold text-gray-900 tracking-wide uppercase">Get in touch</h2>
                <h1 class="mt-2 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">Contact EduSphere</h1>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">Have questions? We're here to help learners and partners.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h3>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-feather="user" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input type="text" id="name" name="name" class="focus:ring-gray-900 focus:border-gray-900 block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-3" placeholder="John Doe" />
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-feather="mail" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" class="focus:ring-gray-900 focus:border-gray-900 block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-3" placeholder="you@example.com" />
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i data-feather="file-text" class="h-5 w-5 text-gray-400"></i>
                                </div>
                                <select id="subject" name="subject" class="focus:ring-gray-900 focus:border-gray-900 block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-3 bg-white">
                                    <option>General Inquiry</option>
                                    <option>Course Support</option>
                                    <option>Partnership</option>
                                    <option>Feedback</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" class="shadow-sm focus:ring-gray-900 focus:border-gray-900 block w-full sm:text-sm border border-gray-300 rounded-md p-4" placeholder="How can we help you?"></textarea>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input id="agree" name="agree" type="checkbox" class="focus:ring-gray-900 h-4 w-4 text-gray-900 border-gray-300 rounded" />
                            <label for="agree" class="ml-2 block text-sm text-gray-700"> I agree to EduSphere's <a href="#" class="text-gray-900 font-medium hover:text-gray-600">privacy policy</a> </label>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-gray-800">
                                Send Message
                                <i data-feather="send" class="ml-2 h-5 w-5"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Info -->
                <div>
                    <div class="space-y-8">
                        <!-- Contact Card 1 -->
                        <!-- <div class="flex">
                <div class="flex-shrink-0 bg-gray-900 rounded-lg p-4">
                  <i data-feather="mail" class="h-6 w-6 text-white"></i>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900">Email Us</h3>
                  <p class="mt-1 text-gray-700">For general inquiries</p>
                  <p class="mt-2 text-gray-900 font-medium">contact@edusphere.com</p>
                </div>
              </div> -->

                        <div class="flex">
                            <div class="flex-shrink-0 bg-gray-900 rounded-lg w-12 h-12 flex items-center justify-center">
                                <i data-feather="mail" class="h-5 w-5 text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Email Us</h3>
                                <p class="mt-1 text-gray-700">For general inquiries</p>
                                <p class="mt-2 text-gray-900 font-medium">contact@edusphere.com</p>
                            </div>
                        </div>

                        <!-- Contact Card 2 -->
                        <div class="flex">
                            <div class="flex-shrink-0 bg-gray-900 rounded-lg w-12 h-12 flex items-center justify-center">
                                <i data-feather="phone" class="h-6 w-6 text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Call Us</h3>
                                <p class="mt-1 text-gray-700">Mon-Fri, 9am-5pm EST</p>
                                <p class="mt-2 text-gray-900 font-medium">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <!-- Contact Card 3 -->
                        <div class="flex">
                            <div class="flex-shrink-0 bg-gray-900 rounded-lg w-12 h-12 flex items-center justify-center">
                                <i data-feather="map-pin" class="h-6 w-6 text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Visit Us</h3>
                                <p class="mt-1 text-gray-700">Our headquarters</p>
                                <p class="mt-2 text-gray-900 font-medium">123 Education St, Boston, MA 02108</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ CTA -->
                    <div class="mt-12 bg-gray-50 rounded-xl p-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i data-feather="help-circle" class="h-6 w-6 text-gray-900"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Need help quickly?</h3>
                                <p class="mt-2 text-gray-700">Check our <a href="#" class="text-gray-900 font-medium hover:text-gray-600 underline">FAQ page</a> for instant answers to common questions about courses, payments, and more.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Connect with us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-gray-200 hover:text-gray-900">
                                <i data-feather="twitter" class="h-5 w-5"></i>
                            </a>
                            <a href="#" class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-gray-200 hover:text-gray-900">
                                <i data-feather="facebook" class="h-5 w-5"></i>
                            </a>
                            <a href="#" class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-gray-200 hover:text-gray-900">
                                <i data-feather="linkedin" class="h-5 w-5"></i>
                            </a>
                            <a href="#" class="bg-gray-100 p-3 rounded-full text-gray-700 hover:bg-gray-200 hover:text-gray-900">
                                <i data-feather="youtube" class="h-5 w-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map (Optional) -->
            <div class="mt-16 bg-gray-50 rounded-xl overflow-hidden shadow-sm">
                <div class="h-96 w-full bg-gray-200 flex items-center justify-center">
                    <div class="text-center p-6">
                        <i data-feather="map" class="h-12 w-12 text-gray-400 mx-auto"></i>
                        <p class="mt-4 text-gray-500">Interactive map would appear here</p>
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
    </script>
</body>

</html>