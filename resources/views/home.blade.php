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
            
            <script>
                function createSlideContent() {
                    return `
                        <div class="slide-content">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 animated-item">
                                अखिल भारतीय आयुर्विज्ञान संस्थान देवघर
                            </h1>
                            <h2 class="text-2xl md:text-3xl font-semibold mb-8 animated-item">
                                ALL INDIA INSTITUTE OF MEDICAL SCIENCES DEOGHAR
                            </h2>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center button-group animated-item">
                                <a href="https://ors.gov.in/orsportal/selectAppointment" target="_blank" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                    Online Registration System
                                </a>
                                <a href="https://aiimsdeoghar.prd.dcservices.in/Patient_Portal/transactions/PatientLogin.html" target="_blank" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                                    Lab Report
                                </a>
                            </div>
                        </div>
                    `;
                }
            </script>

            <div class="swiper-slide">
                <img src="/images/aiims1.jpg" alt="AIIMS Building">
                <div class="slide-overlay"></div>
                <script>document.write(createSlideContent())</script>
            </div>
            <div class="swiper-slide">
                <img src="/images/aiims2.jpg" alt="AIIMS Auditorium">
                <div class="slide-overlay"></div>
                <script>document.write(createSlideContent())</script>
            </div>
            <div class="swiper-slide">
                <img src="/images/aiims3.jpg" alt="Medical Professionals">
                <div class="slide-overlay"></div>
                <script>document.write(createSlideContent())</script>
            </div>
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
          delay: 5000, // Increased delay for more content
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


<!-- Statistics Section -->
<section class="py-16 bg-gray-50">
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
</section>

<!-- Welcome Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">WELCOME TO AIIMS DEOGHAR</h2>
                <div class="bg-gray-100 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Executive Director & CEO, AIIMS Deoghar</h3>
                    <p class="text-lg font-medium text-blue-600">Prof. (Dr.) Saurabh Varshney</p>
                </div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    AIIMS Deoghar is one of the Apex healthcare institutes being established by the Ministry of Health & Family Welfare, 
                    Government of India under the <em>Pradhan Mantri Swasthya Suraksha Yojna</em> (PMSSY), which planned to set up new AIIMS 
                    institutions in under served areas of the country with the aim of correcting regional imbalances in quality tertiary 
                    level healthcare in the country and in attaining self sufficiency in graduate and postgraduate medical education and training.
                </p>
                <a href="{{ route('about.index') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Read More
                </a>
            </div>
            <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                <p class="text-gray-500">Director Image Placeholder</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest Notices -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Latest Notices</h2>
            <a href="{{ route('notices.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($notices as $notice)
            <div class="bg-white rounded-lg shadow-md p-6 notice-card">
                <div class="flex items-start justify-between mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $notice->category }}</span>
                    <span class="text-sm text-gray-500">{{ $notice->notice_date->format('M d, Y') }}</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $notice->title }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($notice->description, 100) }}</p>
                <a href="{{ route('notices.show', $notice) }}" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Latest Events -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Upcoming Events</h2>
            <a href="{{ route('events.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($events as $event)
            <div class="bg-white rounded-lg shadow-md p-6 notice-card border-l-4 border-green-500">
                <div class="flex items-start justify-between mb-4">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $event->event_type }}</span>
                    <span class="text-sm text-gray-500">{{ $event->event_date->format('M d, Y') }}</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $event->title }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($event->description, 100) }}</p>
                @if($event->venue)
                <p class="text-sm text-gray-500 mb-2">📍 {{ $event->venue }}</p>
                @endif
                <a href="{{ route('events.show', $event) }}" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Latest Jobs -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Latest Job Openings</h2>
            <a href="{{ route('jobs.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($jobs as $job)
            <div class="bg-white rounded-lg shadow-md p-6 notice-card border-l-4 border-purple-500">
                <div class="flex items-start justify-between mb-4">
                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $job->position_type }}</span>
                    <span class="text-sm text-gray-500">{{ $job->application_end_date->format('M d, Y') }}</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $job->title }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($job->description, 100) }}</p>
                @if($job->department)
                <p class="text-sm text-gray-500 mb-2">🏢 {{ $job->department }}</p>
                @endif
                <a href="{{ route('jobs.show', $job) }}" class="text-blue-600 hover:text-blue-800 font-medium">View Details →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Departments Preview -->
@if($departments->count() > 0)
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Our Departments</h2>
            <a href="{{ route('departments.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($departments as $department)
            <div class="bg-white rounded-lg shadow-md p-6 notice-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $department->name }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ Str::limit($department->description, 100) }}</p>
                @if($department->head_of_department)
                <p class="text-sm text-gray-500 mb-2">👨‍⚕️ {{ $department->head_of_department }}</p>
                @endif
                <a href="{{ route('departments.show', $department) }}" class="text-blue-600 hover:text-blue-800 font-medium">Learn More →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection