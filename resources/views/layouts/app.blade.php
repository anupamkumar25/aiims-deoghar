<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'AIIMS Deoghar - All India Institute of Medical Sciences')</title>
    <meta name="description" content="@yield('description', 'AIIMS Deoghar is one of the Apex healthcare institutes being established by the Ministry of Health & Family Welfare, Government of India under the Pradhan Mantri Swasthya Suraksha Yojna (PMSSY).')">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional CSS -->
    <style>
        .hero-slider {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        }
        .statistics-card {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .notice-card {
            transition: all 0.3s ease;
        }
        .notice-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Custom colors to match the image
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'aiims-dark-blue': '#0b0f42',
                        'aiims-navy': '#1A237E',
                        'aiims-red': '#e62117',
                        'hims-icon-blue': '#29b6f6',
                    }
                }
            }
        }
    </script>
    <style>
        /* Simple scroll-behavior for the scroll-to-top button */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">

    <header class="sticky top-0 z-50 shadow-md">

        <div class="bg-aiims-dark-blue py-2 text-white">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center space-x-2 text-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    <span class="hidden md:inline">Welcome to All India Institute of Medical Sciences Deoghar</span>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Twitter">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Instagram">
                       <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919C8.415 2.175 8.796 2.163 12 2.163zm0 1.802c-3.239 0-3.59.012-4.834.07-2.734.124-4.004 1.4-4.128 4.128-.058 1.244-.069 1.595-.069 4.834s.011 3.59.069 4.834c.124 2.734 1.394 4.004 4.128 4.128 1.244.058 1.595.069 4.834.069s3.59-.011 4.834-.069c2.734-.124 4.004-1.394 4.128-4.128.058-1.244.069-1.595.069-4.834s-.011-3.59-.069-4.834c-.124-2.734-1.394-4.004-4.128-4.128C15.59 3.975 15.239 3.965 12 3.965zm0 2.973c-2.484 0-4.483 1.999-4.483 4.483s1.999 4.483 4.483 4.483 4.483-1.999 4.483-4.483-1.999-4.483-4.483-4.483zm0 7.165c-1.478 0-2.682-1.204-2.682-2.682s1.204-2.682 2.682-2.682 2.682 1.204 2.682 2.682-1.204 2.682-2.682 2.682zm4.616-7.142c-.663 0-1.2.536-1.2 1.2s.537 1.2 1.2 1.2 1.2-.536 1.2-1.2-.537-1.2-1.2-1.2z"/></svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white py-4">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row justify-between items-center gap-4">
                <div class="flex items-center space-x-3">
                     <svg class="w-10 h-10 text-aiims-red" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-800">Mail Us</span>
                        <span class="text-sm text-gray-600">office.aiimsdeoghar@gmail.com</span>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <a href="/">
                     <img class="h-16" src=Vite::asset{"/resources/images/aiims.png"} alt="AIIMS Deoghar Logo">
                     </a>
                </div>

                <div class="flex items-center space-x-3">
                    <!-- <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 10L21 7L17 3L14 6" stroke="#29b6f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 7L12 8" stroke="#fbc02d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 7L3 17C2.46957 17.5304 2.11086 18.2391 2.0076  1 19C1.86478 20.0732 2.92679 21.1352 4 21C4.76086 20.8891 5.46957 20.5304 6 20L16 10" stroke="#f44336" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> -->
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-800">HIMS</span>
                        <a href="https://aiimsdeoghar.prd.dcservices.in/AHIMSG5/hissso/Login" class="text-sm text-gray-600 hover:underline">Click here</a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="bg-aiims-navy">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <ul class="hidden lg:flex items-center text-white text-sm font-bold uppercase">
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">HOME</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">ABOUT US</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">HOSPITAL SERVICE</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">ACADEMICS</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">DEPARTMENTS</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">STUDENT CORNER</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">NOTICES</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">PROCUREMENT</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">JOB</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">NIRF</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">CONTACT</a></li>
                </ul>

                <div class="lg:hidden flex-grow">
                    </div>
                <button class="lg:hidden bg-aiims-red text-white p-3 h-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>

             <!-- Hamburger Menu Button -->
                 <div class="lg:hidden flex-grow"></div> <!-- Spacer -->
                <button class="lg:hidden bg-aiims-red text-white px-4">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>

        </nav>

    </header>
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- ======================= FOOTER ======================= -->
   <!-- ======================= FOOTER ======================= -->
<footer class="bg-aiims-navy text-gray-300">
    <!-- Footer Top: Contact Info -->
    <div class="py-8">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Address -->
            <div class="flex flex-col items-center space-y-2">
                <i class="fa-solid fa-location-dot text-2xl text-aiims-red"></i>
                <h3 class="font-bold text-white text-lg">Address</h3>
                <p class="text-sm">AIIMS Deoghar, Devipur, Jharkhand<br>India, PIN - 814152</p>
            </div>
            <!-- Help Desk -->
            <div class="flex flex-col items-center space-y-2 md:border-x border-gray-700">
                <i class="fa-solid fa-phone text-2xl text-aiims-red"></i>
                <h3 class="font-bold text-white text-lg">Help Desk</h3>
                <p class="text-sm">06432277220</p>
                <p class="text-xs">Mon to Fri - 08:30 AM to 04:30 PM</p>
            </div>
            <!-- Email Address -->
            <div class="flex flex-col items-center space-y-2">
                <i class="fa-solid fa-envelope text-2xl text-aiims-red"></i>
                <h3 class="font-bold text-white text-lg">Email Address</h3>
                <p class="text-sm">office.aiimsdeoghar@gmail.com</p>
                <p class="text-sm">www.aiimsdeoghar.edu.in</p>
            </div>
        </div>
    </div>

    <!-- Footer Main: Links -->
    <div class="bg-gray-800 py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-sm">
            <!-- Useful Links -->
            <div>
                <h3 class="font-bold text-white text-base mb-4 uppercase">Useful Links</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> AIIMS Bhubaneswar</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> AIIMS Jodhpur</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> AIIMS Patna</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> AIIMS Raipur</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> AIIMS Rishikesh</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> PMSSY</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> MOHFW</a></li>
                </ul>
            </div>
            <!-- Our Sitemap -->
            <div>
                <h3 class="font-bold text-white text-base mb-4 uppercase">Our Sitemap</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Home</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Act & Rules</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Image Gallery</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Video Gallery</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Download</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Events</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Notice</a></li>
                </ul>
            </div>
            <!-- Academics -->
             <div>
                <h3 class="font-bold text-white text-base mb-4 uppercase">Academics</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Media</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Campus</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                </ul>
            </div>
            <!-- Departments -->
             <div>
                <h3 class="font-bold text-white text-base mb-4 uppercase">Departments</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                    <li><a href="#" class="hover:text-white flex items-center gap-2"><i class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom: Copyright -->
    <div class="bg-aiims-dark-blue py-4 text-sm">
        <div class="container mx-auto px-4 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p>&copy; 2019 - 2025 <span class="text-aiims-red font-bold">AIIMS Deoghar</span>. All Rights Reserved. | Designed by- IT Department</p>
            <div class="flex items-center gap-4">
                <div class="bg-black text-white px-3 py-1 tracking-widest rounded">
                    000634290
                </div>
                <a href="#page-top" class="w-10 h-10 bg-aiims-red flex items-center justify-center rounded hover:bg-red-700 transition-colors">
                    <i class="fa-solid fa-chevron-up text-white"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('button[class*="lg:hidden"]');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
