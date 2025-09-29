<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'AIIMS Deoghar - All India Institute of Medical Sciences')</title>
    <meta name="description"
        content="@yield('description', 'AIIMS Deoghar is one of the Apex healthcare institutes being established by the Ministry of Health & Family Welfare, Government of India under the Pradhan Mantri Swasthya Suraksha Yojna (PMSSY).')">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        
    </style>


    <style>
        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));
            z-index: 1;
        }
    </style>

    <style>
        /* Hide Google branding (allowed minimal customization) */
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            font-size: 0 !important;
        }

        .goog-te-gadget span {
            display: none;
        }
    </style>

    {{-- For Scrolling animation of notices on home page --}}

    <style>
        .scrolling-container {
            animation: scroll-up 20s linear infinite;
        }

        /* Pause animation on hover */
        .scrolling-container:hover {
            animation-play-state: paused;
        }

        @keyframes scroll-up {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
                /* Moves the content up by 50% of its total height */
            }
        }
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0ot92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Base for all scrolling containers */
        .scrolling-container {
            animation: scroll-up 20s linear infinite;

            padding-top: 1rem;

            padding-bottom: 1rem;

        }

        /* Specific speeds for each section if desired */
        .notices-scroll {
            animation-duration: 25s;

        }

        .jobs-scroll {
            animation-duration: 20s;
        }

        .events-scroll {

            animation-duration: 22s;

        }


        /* Pause animation on hover */
        .scrolling-container:hover {
            animation-play-state: paused;
        }

        @keyframes scroll-up {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-50%);
                /* This assumes content is duplicated once */
            }
        }
    </style>




    {{-- For scroller content --}}
    <style>
        .scroll-container {
            width: 100%;
            height: 230px;
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
        }

        .scroll-content img {
            display: inline-block;
            width: 250px;
            height: auto;
            margin: 10px;
            vertical-align: top;
        }
    </style>



    {{-- For Navigation Bar --}}

    <style>
        /* Sidenav styling */
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1000;
            top: 0;
            right: 0;
            background-color: #1A237E;
            overflow-x: hidden;
            padding-top: 60px;
            transition: 0.5s;
        }

        .sidenav-aiims {
            text-align: center;
            font-size: 25px;
            padding: 20px;

        }

        #first {
            color: rgba(230, 33, 23, 0.8);
        }


        #second {
            color: rgba(255, 255, 255, 0.8);

        }

        .sidenav-aiims p2 {
            color: rgba(255, 255, 255, 0.8);
            font-size: 25px;
            display: block;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #ffffff;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            left: 25px;
            /* Adjusted for right-side slide */
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-right .5s;
            /* Adjusted for right-side slide */
            padding: 20px;
        }

        /* Hamburger icon animation */
        /* .hamburger {
            display: inline-block;
            cursor: pointer;
            z-index: 2;
            font-size: 30px;
            color: #e62117;       
              
        } */

        .hamburger {
            display: inline-block;
            cursor: pointer;

            font-size: 30px;
            color: #e62117;
            top: 136px;
            right: 35px;
            cursor: pointer;
            z-index: 1001;
        }

        .hamburger div {
            width: 35px;
            height: 5px;
            background-color: #e62117;
            margin: 6px 0;
            transition: 0.4s;
        }

        .change .bar1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Mobile responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 600px) {
            .hamburger {
                display: inline-block;
            }

            .sidenav a {
                font-size: 22px;
            }
        }
    </style>


    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginRight = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginRight = "0";
        }

        function toggleHamburger(x) {
            x.classList.toggle("change");
        }
    </script>


    {{-- For Sidenav search baar --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .search-container {
            background-color: white;
            border-radius: 50px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 0px;
            max-width: 500px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .search-container:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .form-control.search-input {
            border: none;
            background: transparent;
            padding-left: 20px;
            font-size: 1rem;
            height: 50px;
        }

        .form-control.search-input:focus {
            box-shadow: none;
            outline: none;
        }

        .btn-search {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 5px 10px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-search:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .search-icon {
            color: #6c757d;
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>



    {{-- ==== Custom Scrollbar ==== --}}
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f5f5f5;
        }

        ::-webkit-scrollbar-thumb {
            background: #636262;
            border-radius: 0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #333;
        }
    </style>


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
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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

    <!-------------------------------- For Carousel ----------------------------------->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Swiper Container Styling */
        .swiper {
            width: 100%;
            height: 55vh;
            /* Increased height for more content */
        }

        .swiper-slide {
            position: relative;
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .slide-content h1 {
            color: #e62117;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Black overlay for better text readability */
        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Slightly darker for better contrast */
        }

        /* Text content on the slide */
        .slide-content {
            position: absolute;
            z-index: 10;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 90%;
        }

        /* Shared animation class */
        .animated-item {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        /* Staggered animation delays */
        .slide-content h1 {
            transition-delay: 0.2s;
        }

        .slide-content h2 {
            transition-delay: 0.4s;
        }

        .slide-content .button-group {
            transition-delay: 0.6s;
        }

        /* Show text animation on active slide */
        .swiper-slide-active .animated-item {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom Navigation Arrows */
        .swiper-button-next,
        .swiper-button-prev {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: rgba(230, 33, 23, 0.8);
            /* AIIMS Red */
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
            font-weight: bold;
        }

        /* Custom Pagination Dots */
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: rgba(255, 255, 255, 0.7);
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #e62117;
            /* AIIMS Red */
        }
    </style>



    {{-----------------------For Welcome section -----------------------}}

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
            color: #333;
        }

        /* Center the whole block */
        .section-wrapper {
            display: flex;
            justify-content: center;
            padding: 40px 0;
        }

        /* Container with fixed width */
        .section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            max-width: 1100px;
            /* control the width */
            width: 100%;
            gap: 40px;
        }

        .left,
        .right {
            flex: 1;
            min-width: 300px;
        }

        .heading {
            font-size: 20px;
            font-weight: bold;
            color: #1d2473;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .heading::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e53935;
            margin-top: 5px;
        }

        .director {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .director img {
            width: 120px;
            height: auto;
            border: 1px solid #ccc;
            margin-right: 15px;
        }

        .director h3 {
            margin: 0;
            font-size: 14px;
            color: #1d2473;
        }

        .director p {
            margin: 5px 0 0;
            font-size: 13px;
        }

        .about {
            font-size: 14px;
            line-height: 1.6;
            margin-top: 10px;
        }

        .about a {
            color: #e53935;
            text-decoration: none;
            font-weight: bold;
        }

        .ministers {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .minister {
            text-align: center;
            width: 150px;
        }

        .minister img {
            width: 150px;
            height: 180px;
            object-fit: cover;
            border: 1px solid #ccc;
        }

        .minister h4 {
            font-size: 14px;
            margin: 8px 0 3px;
            color: #1d2473;
        }

        .minister p {
            font-size: 12px;
            color: #444;
            margin: 0;
        }
    </style>


</head>

<body class="bg-gray-50 font-sans antialiased">

    <header class="sticky top-0 z-50 shadow-md">

        {{-- <div class="bg-aiims-dark-blue py-2 text-white">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center space-x-2 text-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    <span class="hidden md:inline">Welcome to All India Institute of Medical Sciences Deoghar</span>
                </div>



                <div class="flex items-center space-x-4">
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="YouTube">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Twitter">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919C8.415 2.175 8.796 2.163 12 2.163zm0 1.802c-3.239 0-3.59.012-4.834.07-2.734.124-4.004 1.4-4.128 4.128-.058 1.244-.069 1.595-.069 4.834s.011 3.59.069 4.834c.124 2.734 1.394 4.004 4.128 4.128 1.244.058 1.595.069 4.834.069s3.59-.011 4.834-.069c2.734-.124 4.004-1.394 4.128-4.128.058-1.244.069-1.595.069-4.834s-.011-3.59-.069-4.834c-.124-2.734-1.394-4.004-4.128-4.128C15.59 3.975 15.239 3.965 12 3.965zm0 2.973c-2.484 0-4.483 1.999-4.483 4.483s1.999 4.483 4.483 4.483 4.483-1.999 4.483-4.483-1.999-4.483-4.483-4.483zm0 7.165c-1.478 0-2.682-1.204-2.682-2.682s1.204-2.682 2.682-2.682 2.682 1.204 2.682 2.682-1.204 2.682-2.682 2.682zm4.616-7.142c-.663 0-1.2.536-1.2 1.2s.537 1.2 1.2 1.2 1.2-.536 1.2-1.2-.537-1.2-1.2-1.2z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>

                </div>
                <div>
                    <!-- Google Translate Widget -->
                    <div id="google_translate_element"></div>
                </div>

            </div>
        </div> --}}


        <div class="bg-aiims-dark-blue py-2 text-white">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <!-- Left section -->
                <div class="flex items-center space-x-2 text-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 
                       10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 
                       1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 
                       1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    <span class="hidden md:inline">
                        Welcome to All India Institute of Medical Sciences Deoghar
                    </span>
                </div>

                <!-- Right section (icons + translate together) -->
                <div class="flex items-center space-x-4">
                    <!-- Social icons -->
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="YouTube">
                        <!-- YouTube SVG -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Facebook">
                        <!-- Facebook SVG -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Twitter">
                        <!-- Twitter SVG -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="Instagram">
                        <!-- Instagram SVG -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919C8.415 2.175 8.796 2.163 12 2.163zm0 1.802c-3.239 0-3.59.012-4.834.07-2.734.124-4.004 1.4-4.128 4.128-.058 1.244-.069 1.595-.069 4.834s.011 3.59.069 4.834c.124 2.734 1.394 4.004 4.128 4.128 1.244.058 1.595.069 4.834.069s3.59-.011 4.834-.069c2.734-.124 4.004-1.394 4.128-4.128.058-1.244.069-1.595.069-4.834s-.011-3.59-.069-4.834c-.124-2.734-1.394-4.004-4.128-4.128C15.59 3.975 15.239 3.965 12 3.965zm0 2.973c-2.484 0-4.483 1.999-4.483 4.483s1.999 4.483 4.483 4.483 4.483-1.999 4.483-4.483-1.999-4.483-4.483-4.483zm0 7.165c-1.478 0-2.682-1.204-2.682-2.682s1.204-2.682 2.682-2.682 2.682 1.204 2.682 2.682-1.204 2.682-2.682 2.682zm4.616-7.142c-.663 0-1.2.536-1.2 1.2s.537 1.2 1.2 1.2 1.2-.536 1.2-1.2-.537-1.2-1.2-1.2z" />
                        </svg>
                    </a>
                    <a href="#" class="text-aiims-red hover:text-white" aria-label="LinkedIn">
                        <!-- LinkedIn SVG -->
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>

                    <!-- Google Translate Widget -->
                    <div class="flex items-center space-x-8">
                        <div></div>
                        <div id="google_translate_element"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-white py-2">
            <div class="container mx-auto px-4 flex flex-col lg:flex-row justify-between items-center gap-4">
                <div class="flex items-center space-x-3">
                    <svg class="w-10 h-10 text-aiims-red" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-800">Mail Us</span>
                        <span class="text-sm text-gray-600">office.aiimsdeoghar@gmail.com</span>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <a href="/">
                        <img class="h-16" src="/images/aiims.png" alt="AIIMS Deoghar Logo">
                    </a>
                </div>


                {{-- <div class="flex items-center space-x-2">
                    <img src="/images/hims.png" alt="" class="h-8">
                    <span class="font-bold text-gray-800">HIMS</span>
                    <a href="https://aiimsdeoghar.prd.dcservices.in/AHIMSG5/hissso/Login"
                        class="text-sm text-gray-600 hover:underline">Click here</a>
                </div> --}}

                <div class="flex flex-col items-center space-y-0">
                    <div class="flex items-center space-x-1">
                        <img src="/images/himss.png" alt="" class="h-15">
                        <span class="font-bold text-gray-800">HIMS</span>
                    </div>
                    <a href="https://aiimsdeoghar.prd.dcservices.in/AHIMSG5/hissso/Login"
                        class="text-sm text-gray-600 hover:underline">
                        Click here
                    </a>
                </div>


            </div>
        </div>

        {{-- <nav class="bg-aiims-navy">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <ul class="hidden lg:flex items-center text-white text-sm font-bold uppercase">
                    <li><a href="{{ route('home') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">HOME</a></li>
                    <li><a href="{{ route('about.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">ABOUT US</a></li>
                    <li><a href="{{ route('hospital.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">HOSPITAL SERVICE</a></li>
                    <li><a href="{{ route('academics.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">ACADEMICS</a></li>
                    <li><a href="{{ route('departments.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">DEPARTMENTS</a></li>
                    <li><a href="{{ route('student.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">STUDENT CORNER</a></li>
                    <li><a href="{{ route('notices.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">NOTICES</a></li>
                    <li><a href="{{ route('procurement.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">PROCUREMENT</a></li>
                    <li><a href="{{ route('jobs.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">JOB</a></li>
                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">NIRF</a></li>
                    <li><a href="{{ route('contact.create') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">CONTACT</a></li>
                </ul>

                <div class="lg:hidden flex-grow">
                </div>
                <button class="lg:hidden bg-aiims-red text-white p-3 h-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Hamburger Menu Button -->
            <div class="lg:hidden flex-grow"></div> <!-- Spacer -->
            <button class="lg:hidden bg-aiims-red text-white px-4">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
            </div>

        </nav> --}}



        <nav class="bg-aiims-navy">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <ul class="hidden lg:flex items-center text-white text-sm font-bold uppercase space-x-1">


                    <li>
                        <a href="{{ route('home') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">HOME</a>
                    </li>


                    <li class="relative group">
                        <a href="" class="block px-3 py-4 hover:bg-blue-900 transition-colors">ABOUT US</a>

                        <ul
                            class="absolute left-0 top-full hidden group-hover:block bg-aiims-navy text-white shadow-md w-48">
                            <li><a href="/director-desk" class="block px-4 py-2 hover:bg-blue-900">Director Desk</a>
                            </li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Our Mission & Vission</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Logo</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">About Deoghar</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">How to Reach</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Administration</a></li>
                            <li class="relative group">
                                <a href="#" class="block px-4 py-2 hover:bg-blue-900">Core Committees & Cell</a>
                            </li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Anual Report</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Act & Rules</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Privacy Policy</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">RTI</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">eNewsletter</a></li>
                        </ul>

                    </li>


                    <li class="relative group">
                        <a href="" class="block px-3 py-4 hover:bg-blue-900 transition-colors">HOSPITAL SERVICE</a>
                        <ul
                            class="absolute left-0 top-full hidden group-hover:block bg-aiims-navy text-white shadow-md w-48">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Administration</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">OPD</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">IPD</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">EHS</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Emergency</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Hospital Charges</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Telemedicine</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Blood Bank</a></li>
                        </ul>
                    </li>


                    <li class="relative group">
                        <a href="" class="block px-3 py-4 hover:bg-blue-900 transition-colors">ACADEMICS</a>

                        <ul
                            class="absolute left-0 top-full hidden group-hover:block bg-aiims-navy text-white shadow-md w-48">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Administration</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Courses</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Undergraduate courses</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Postgraduate courses</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Superspeciality courses</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Fellowship / Post Doctoral
                                    Courses</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Research</a></li>
                        </ul>

                    </li>



                    <li class="relative group">
                        <a href="{{ route('departments.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">DEPARTMENTS</a>



                    </li>


                    <li class="relative group">
                        <a href="" class="block px-3 py-4 hover:bg-blue-900 transition-colors">STUDENT CORNER</a>

                        <ul
                            class="absolute left-0 top-full hidden group-hover:block bg-aiims-navy text-white shadow-md w-48">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Map</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Anti Ragging</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Hostel</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Library</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Student Welfare</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Exam</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Result</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Notices</a></li>
                        </ul>


                    </li>


                    <li><a href="{{ route('notices.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">NOTICES</a></li>


                    <li class="relative group">
                        <a href="{{ route('procurement.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">PROCUREMENT</a>

                        <ul
                            class="absolute left-0 top-full hidden group-hover:block bg-aiims-navy text-white shadow-md w-48">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Tender</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">GeM</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Quotation</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Notice</a></li>
                        </ul>


                    </li>


                    <li class="relative group">
                        <a href="{{ route('jobs.index') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">JOB</a>

                        <ul
                            class="absolute left-0 top-full hidden group-hover:block bg-aiims-navy text-white shadow-md w-48">
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Advertisment</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Result</a></li>

                            <li><a href="#" class="block px-4 py-2 hover:bg-blue-900">Notice</a></li>
                        </ul>
                    </li>


                    <li><a href="#" class="block px-3 py-4 hover:bg-blue-900 transition-colors">NIRF</a></li>


                    <li><a href="{{ route('contact.create') }}"
                            class="block px-3 py-4 hover:bg-blue-900 transition-colors">CONTACT</a></li>
                </ul>

                <!-- Sidenav -->
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="sidenav-aiims">
                        <a><span id="first">AIIMS </span><span id="second">Deoghar</span></a>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8 col-lg-6">
                                <div class="search-container position-relative">
                                    <form class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="search-icon feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                        <input class="form-control search-input ps-5" type="search"
                                            placeholder="Search anything..." aria-label="Search">
                                        <button class="btn btn-search ms-2" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Tender</a>
                    <a href="#">Research</a>
                    <a href="#">Events</a>
                    <a href="#">Contact US</a>
                </div>

                <!-- Hamburger Icon (Trigger) -->
                <span class="hamburger" onclick="openNav(); toggleHamburger(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </span>

            </div>



            <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
            {{-- <div id="main">
                ...
            </div> --}}

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
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> AIIMS Bhubaneswar</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> AIIMS Jodhpur</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> AIIMS Patna</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> AIIMS Raipur</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> AIIMS Rishikesh</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> PMSSY</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> MOHFW</a></li>
                    </ul>
                </div>
                <!-- Our Sitemap -->
                <div>
                    <h3 class="font-bold text-white text-base mb-4 uppercase">Our Sitemap</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Home</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Act & Rules</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Image Gallery</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Video Gallery</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Download</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Events</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Notice</a></li>
                    </ul>
                </div>
                <!-- Academics -->
                <div>
                    <h3 class="font-bold text-white text-base mb-4 uppercase">Academics</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Media</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Campus</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                    </ul>
                </div>
                <!-- Departments -->
                <div>
                    <h3 class="font-bold text-white text-base mb-4 uppercase">Departments</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                        <li><a href="#" class="hover:text-white flex items-center gap-2"><i
                                    class="fa-solid fa-chevron-right text-xs"></i> Demo Link</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom: Copyright -->
        <div class="bg-aiims-dark-blue py-4 text-sm">
            <div class="container mx-auto px-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; 2019 - 2025 <span class="text-aiims-red font-bold">AIIMS Deoghar</span>. All Rights Reserved.
                    | Designed by- IT Department</p>
                <div class="flex items-center gap-4">
                    <div class="bg-black text-white px-3 py-1 tracking-widest rounded">
                        000634290
                    </div>
                    <a href="#page-top"
                        class="w-10 h-10 bg-aiims-red flex items-center justify-center rounded hover:bg-red-700 transition-colors">
                        <i class="fa-solid fa-chevron-up text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.querySelector('button[class*="lg:hidden"]');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {
                    pageLanguage: 'en',
                    includedLanguages: 'en,hi,fr,de,es,ar,zh-CN', // optional: restrict languages
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                },
                'google_translate_element'
            );
        }
    </script>

    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</html>