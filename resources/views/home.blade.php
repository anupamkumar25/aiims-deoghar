@extends('layouts.app')

@section('title', 'AIIMS Deoghar - All India Institute of Medical Sciences')
@section('description', 'AIIMS Deoghar is one of the Apex healthcare institutes being established by the Ministry of Health & Family Welfare, Government of India under the Pradhan Mantri Swasthya Suraksha Yojna (PMSSY).')

@section('content')
    <!-- Hero Section -->
    <!-- <section class="hero-slider relative overflow-hidden">
            <div class="container mx-auto px-4 py-20">
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        अखिल भारतीय आयुर्विज्ञान संस्थान देवघर
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-4">
                        ALL INDIA INSTITUTE OF MEDICAL SCIENCES DEOGHAR
                    </h2>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://ors.gov.in/orsportal/selectAppointment" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Online Registration System
                        </a>
                        <a href="https://aiimsdeoghar.prd.dcservices.in/Patient_Portal/transactions/PatientLogin.html" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                            Lab Report
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- Slide 1: Main Welcome -->
            <div class="swiper-slide">
                <img src="images/aiims1.jpg" alt="AIIMS Building">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 animated-item">
                        अखिल भारतीय आयुर्विज्ञान संस्थान देवघर
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-8 animated-item">
                        ALL INDIA INSTITUTE OF MEDICAL SCIENCES DEOGHAR
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center button-group animated-item">
                        <a href="https://ors.gov.in/orsportal/selectAppointment" target="_blank"
                            class="bg-red-500 text-white px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-red-600 hover:shadow-lg transition duration-300 ease-in-out">
                            Online Registration System
                        </a>
                        <a href="https://aiimsdeoghar.prd.dcservices.in/Patient_Portal/transactions/PatientLogin.html"
                            target="_blank"
                            class="bg-white border-2 border-red-500 text-red-500 px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
                            Lab Report
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Patient Care -->
            <div class="swiper-slide">
                <img src="images/aiims2.jpeg" alt="AIIMS Auditorium">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 animated-item">
                        उत्कृष्ट रोगी देखभाल
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-8 animated-item">
                        COMMITMENT TO WORLD-CLASS HEALTHCARE
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center button-group animated-item">
                        <a href="https://ors.gov.in/orsportal/selectAppointment" target="_blank"
                            class="bg-red-500 text-white px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-red-600 hover:shadow-lg transition duration-300 ease-in-out">
                            Online Registration System
                        </a>
                        <a href="https://aiimsdeoghar.prd.dcservices.in/Patient_Portal/transactions/PatientLogin.html"
                            target="_blank"
                            class="bg-white border-2 border-red-500 text-red-500 px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
                            Lab Report
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Medical Education -->
            <div class="swiper-slide">
                <img src="images/aiims3.jpg" alt="Medical Professionals">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 animated-item">
                        अग्रणी चिकित्सा शिक्षा
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-8 animated-item">
                        INSPIRING THE NEXT GENERATION OF DOCTORS
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center button-group animated-item">
                        <a href="https://ors.gov.in/orsportal/selectAppointment" target="_blank"
                            class="bg-red-500 text-white px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-red-600 hover:shadow-lg transition duration-300 ease-in-out">
                            Online Registration System
                        </a>
                        <a href="https://aiimsdeoghar.prd.dcservices.in/Patient_Portal/transactions/PatientLogin.html"
                            target="_blank"
                            class="bg-white border-2 border-red-500 text-red-500 px-8 py-3 rounded-lg font-semibold shadow-md hover:bg-red-500 hover:text-white hover:shadow-lg transition duration-300 ease-in-out">
                            Lab Report
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- 4. Link to Swiper.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- 5. Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    {{-- For events, faculty, .... buttons --}}

    <section class="bg-gray-90 py-9">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-8 text-center">

                <!-- Button 1: Event -->
                <a href="{{ route('events.index') }}" class="group flex flex-col items-center space-y-4 no-underline">
                    <div
                        class="w-28 h-28 bg-red-600 rounded-full flex items-center justify-center text-white text-5xl shadow-lg transform transition-transform duration-300 hover:bg-blue-950 group-hover:scale-110 group-hover:shadow-xl">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <span class="font-bold text-lg text-indigo-900">Event</span>
                </a>

                <!-- Button 2: Faculty -->
                <a href="#" class="group flex flex-col items-center space-y-4 no-underline">
                    <div
                        class="w-28 h-28 bg-red-600 rounded-full flex items-center justify-center text-white text-5xl shadow-lg transform transition-transform duration-300 hover:bg-blue-950 group-hover:scale-110 group-hover:shadow-xl">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <span class="font-bold text-lg text-indigo-900">Faculty</span>
                </a>

                <!-- Button 3: Workshop/CME -->
                <a href="#" class="group flex flex-col items-center space-y-4 no-underline">
                    <div
                        class="w-28 h-28 bg-red-600 rounded-full flex items-center justify-center text-white text-5xl shadow-lg transform transition-transform duration-300 hover:bg-blue-950 group-hover:scale-110 group-hover:shadow-xl">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <span class="font-bold text-lg text-indigo-900">Workshop/CME</span>
                </a>

                <!-- Button 4: Job -->
                <a href="{{ route('jobs.index') }}" class="group flex flex-col items-center space-y-4 no-underline">
                    <div
                        class="w-28 h-28 bg-red-600 rounded-full flex items-center justify-center text-white text-5xl shadow-lg transform transition-transform duration-300 hover:bg-blue-950 group-hover:scale-110 group-hover:shadow-xl">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <span class="font-bold text-lg text-indigo-900">Job</span>
                </a>

                <!-- Button 5: Download -->
                <a href="#" class="group flex flex-col items-center space-y-4 no-underline">
                    <div
                        class="w-28 h-28 bg-red-600 rounded-full flex items-center justify-center text-white text-5xl shadow-lg transform transition-transform duration-300 hover:bg-blue-950 group-hover:scale-110 group-hover:shadow-xl">
                        <i class="fa-solid fa-download"></i>
                    </div>
                    <span class="font-bold text-lg text-indigo-900">Download</span>
                </a>

                <!-- Button 6: Research -->
                <a href="#" class="group flex flex-col items-center space-y-4 no-underline">
                    <div
                        class="w-28 h-28 bg-red-600 rounded-full flex items-center justify-center text-white text-5xl shadow-lg transform transition-transform duration-300 hover:bg-blue-950 group-hover:scale-110 group-hover:shadow-xl">
                        <i class="fa-solid fa-flask-vial"></i>
                    </div>
                    <span class="font-bold text-lg text-indigo-900">Research</span>
                </a>

            </div>
        </div>
    </section>







    {{-- <!-- Statistics Section -->
    <section class="py-16 bg-white-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Hospital Statistics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($statistics as $stat)
                <div class="bg-white rounded-lg shadow-lg p-8 text-center statistics-card">
                    <div class="text-4xl text-blue-600 mb-4">
                        @if($stat->icon)
                        {!! $stat->icon !!}
                        @else
                        📊
                        @endif
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $stat->name }}</h3>
                    <div class="space-y-1">
                        <p class="text-3xl font-bold text-blue-600">Today: {{ $stat->today_count }}</p>
                        <p class="text-lg text-gray-600">Total: {{ $stat->total_count }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <!-- Welcome Section -->
    {{-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">WELCOME TO AIIMS DEOGHAR</h2>
                    <div class="bg-gray-100 p-6 rounded-lg mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Executive Director & CEO, AIIMS Deoghar</h3>
                        <p class="text-lg font-medium text-blue-600">Prof. (Dr.) Saurabh Varshney</p>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        AIIMS Deoghar is one of the Apex healthcare institutes being established by the Ministry of Health &
                        Family Welfare,
                        Government of India under the <em>Pradhan Mantri Swasthya Suraksha Yojna</em> (PMSSY), which planned
                        to set up new AIIMS
                        institutions in under served areas of the country with the aim of correcting regional imbalances in
                        quality tertiary
                        level healthcare in the country and in attaining self sufficiency in graduate and postgraduate
                        medical education and training.
                    </p>
                    <a href="{{ route('about.index') }}"
                        class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Read More
                    </a>
                </div>
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <p class="text-gray-500">Director Image Placeholder</p>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <div class="section-wrapper">
        <div class="section">

            <!-- Left Section -->
            <div class="left">
                <div class="heading">Welcome to AIIMS Deoghar</div>

                <div class="director">
                    <img src="/images/direc.jpg" alt="Executive Director">
                    <div class="about">
                        AIIMS Deoghar is one of the Apex healthcare institutes being established by
                        the Ministry of Health & Family Welfare, Government of India under the
                        <em>Pradhan Mantri Swasthya Suraksha Yojna</em> (PMSSY), which planned to set up
                        new AIIMS institutions in underserved areas of the country with the aim of
                        correcting regional imbalances in quality tertiary level healthcare in the
                        country and in attaining self sufficiency in graduate and postgraduate
                        medical education and training.
                        <a href="#">read more »</a>



                    </div>
                </div>

                <div class="director">
                    <h3>Executive Director & CEO, AIIMS Deoghar</h3>
                    <p>Prof. (Dr.) Saurabh Varshney</p>
                </div>
            </div>

            <!-- Right Section -->
            <div class="right">
                <div class="heading">Ministers of Health and Family Welfare</div>
                <div class="ministers">
                    <div class="minister">
                        <img src="/images/shre jagat.jpg" alt="Minister">
                        <h4>Shri Jagat Prakash Nadda</h4>
                        <p>Hon'ble Union Minister</p>
                    </div>
                    <div class="minister">
                        <img src="/images/smt annu.jpg" alt="Minister">
                        <h4>Smt. Anupriya Patel</h4>
                        <p>Hon'ble Minister of State</p>
                    </div>
                    <div class="minister">
                        <img src="/images/shre prat.jpg" alt="Minister">
                        <h4>Shri Prataprao Jadhav</h4>
                        <p>Hon'ble Minister of State</p>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}


    <div class="section-wrapper">
        <div class="section">

            <!-- Left Section -->
            <div class="left">
                <div class="heading">Welcome to AIIMS Deoghar</div>

                <div class="director">
                    <img src="/images/direc.jpg" alt="Executive Director">
                    <div class="about">
                        AIIMS Deoghar is one of the Apex healthcare institutes being established by
                        the Ministry of Health & Family Welfare, Government of India under the
                        <em>Pradhan Mantri Swasthya Suraksha Yojna</em> (PMSSY), which planned to set up
                        new AIIMS institutions in underserved areas of the country with the aim of
                        correcting regional imbalances in quality tertiary level healthcare in the
                        country and in attaining self sufficiency in graduate and postgraduate
                        medical education and training.
                        <a href="#">read more »</a>

                    </div>

                </div>
                <div>
                    <h3>Executive Director & CEO, AIIMS Deoghar</h3>
                    <p>Prof. (Dr.) Saurabh Varshney</p>
                </div>


                {{-- <div class="about">
                    AIIMS Deoghar is one of the Apex healthcare institutes being established by
                    the Ministry of Health & Family Welfare, Government of India under the
                    <em>Pradhan Mantri Swasthya Suraksha Yojna</em> (PMSSY), which planned to set up
                    new AIIMS institutions in underserved areas of the country with the aim of
                    correcting regional imbalances in quality tertiary level healthcare in the
                    country and in attaining self sufficiency in graduate and postgraduate
                    medical education and training.
                    <a href="#">read more »</a>
                </div> --}}
            </div>

            <!-- Right Section -->
            <div class="right">
                <div class="heading">Ministers of Health and Family Welfare</div>
                <div class="ministers">
                    <div class="minister">
                        <img src="/images/shre jagat.jpg" alt="Minister">
                        <h4>Shri Jagat Prakash Nadda</h4>
                        <p>Hon'ble Union Minister</p>
                    </div>
                    <div class="minister">
                        <img src="/images/smt annu.jpg" alt="Minister">
                        <h4>Smt. Anupriya Patel</h4>
                        <p>Hon'ble Minister of State</p>
                    </div>
                    <div class="minister">
                        <img src="/images/shre prat.jpg" alt="Minister">
                        <h4>Shri Prataprao Jadhav</h4>
                        <p>Hon'ble Minister of State</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Latest Notices -->
    {{-- <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Latest Notices</h2>
                <a href="{{ route('notices.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">View All →</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($notices as $notice)
                    <div class="bg-white rounded-lg shadow-md p-6 notice-card">
                        <div class="flex items-start justify-between mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $notice->category }}</span>
                            <span class="text-sm text-gray-500">{{ $notice->notice_date->format('M d, Y') }}</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $notice->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ \Illuminate\Support\Str::limit($notice->description, 100) }}
                        </p>
                        <a href="{{ route('notices.show', $notice) }}"
                            class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}




    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div>
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-900 border-b-2 border-red-500 pb-2">NOTICES</h2>
                    <a href="{{ route('notices.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Archive
                    <i class="fas fa-external-link-alt"></i></a>
                </div>
                <div class="bg-white rounded-lg  shadow-md p-4 h-96 overflow-hidden relative border border-gray-200">
                    <div class="scrolling-container noticess-scroll absolute w-full top-0 left-0 px-4">



                    </div>
                </div> 
           </div>
            
        

            
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-900 border-b-2  border-red-500 pb-2">LATEST JOBS</h2>
                        <a href="{{ route('jobs.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Archive
                        <i class="fas fa-external-link-alt"></i></a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 h-96 overflow-hidden relative border border-gray-200">
                        <div class="scrolling-container jobs-scroll absolute w-full top-0 left-0 px-4">




                        </div>
                    </div>
                </div>
            
        
            
                <div>
                    <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-bold text-gray-900 border-b-2 border-red-500 pb-2">EVENTS</h2>
                            <a href="{{ route('events.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Archive
                            <i class="fas fa-external-link-alt"></i></a>
                    </div>
                        <div class="bg-white rounded-lg shadow-md p-4 h-96 overflow-hidden relative border border-gray-200">
                            <div class="scrolling-container events-scroll absolute w-full top-0 left-0 px-4">



                            </div>
                        </div>
                </div>

        </div>

    </div> 
</div>

  


    <div class="scroll-container">
        <div class="scroll-content">
            <img src="/images/img1.jpg" alt="">
            {{-- <img src="/images/img2.jpg" alt=""> --}}
            <img src="/images/img3.jpeg" alt="">
            <img src="/images/img4.jpeg" alt="">
            <img src="/images/img5.jpeg" alt="">
            <img src="/images/img6.jpg" alt="">
            <img src="/images/img7.jpg" alt="">
            <img src="/images/img8.jpg" alt="">
            <img src="/images/img9.jpg" alt="">
            <img src="/images/img11.jpg" alt="">
        </div>
    </div>


    <!-- Departments Preview -->
    @if($departments->count() > 0)
        <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Our Departments</h2>
                    <a href="{{ route('departments.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">View All
                        →</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($departments as $department)
                        <div class="bg-white rounded-lg shadow-md p-6 notice-card">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $department->name }}</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                {{ \Illuminate\Support\Str::limit($department->description, 100) }}</p>
                            @if($department->head_of_department)
                                <p class="text-sm text-gray-500 mb-2">👨‍⚕️ {{ $department->head_of_department }}</p>
                            @endif
                            <a href="{{ route('departments.show', $department) }}"
                                class="text-blue-600 hover:text-blue-800 font-medium">Learn More →</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @endsection
</div>

