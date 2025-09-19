<div>
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-red-500 pb-2">NOTICES</h2>
                        <a href="{{ route('notices.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Archive <i
                                class="fas fa-external-link-alt"></i></a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 h-96 overflow-hidden relative border border-gray-200">
                        <div class="scrolling-container notices-scroll absolute w-full top-0 left-0 px-4">
                            {{-- Loop for notices --}}
                            @foreach($notices as $notice)
                                <div class="mb-4 pb-2 border-b border-gray-100 last:border-b-0">
                                    <div class="flex items-center text-gray-600 text-xs mb-1">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ $notice->notice_date->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-800 leading-tight">{{ $notice->title }}</h3>
                                    <a href="{{ route('notices.show', $notice) }}"
                                        class="text-blue-500 hover:underline text-xs mt-1 block">Read More →</a>
                                </div>
                            @endforeach
                            {{-- Duplicate notices for seamless scroll --}}
                            @foreach($notices as $notice)
                                <div class="mb-4 pb-2 border-b border-gray-100 last:border-b-0">
                                    <div class="flex items-center text-gray-600 text-xs mb-1">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ $notice->notice_date->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-800 leading-tight">{{ $notice->title }}</h3>
                                    <a href="{{ route('notices.show', $notice) }}"
                                        class="text-blue-500 hover:underline text-xs mt-1 block">Read More →</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-blue-500 pb-2">LATEST JOBS</h2>
                        <a href="{{ route('jobs.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Archive <i
                                class="fas fa-external-link-alt"></i></a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 h-96 overflow-hidden relative border border-gray-200">
                        <div class="scrolling-container jobs-scroll absolute w-full top-0 left-0 px-4">
                            {{-- Loop for jobs --}}
                            @foreach($jobs as $job)
                                <div class="mb-4 pb-2 border-b border-gray-100 last:border-b-0">
                                    <div class="flex items-center text-gray-600 text-xs mb-1">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ $job->application_end_date->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-800 leading-tight">{{ $job->title }}</h3>
                                    <a href="{{ route('jobs.show', $job) }}"
                                        class="text-blue-500 hover:underline text-xs mt-1 block">View Details →</a>
                                </div>
                            @endforeach
                            {{-- Duplicate jobs for seamless scroll --}}
                            @foreach($jobs as $job)
                                <div class="mb-4 pb-2 border-b border-gray-100 last:border-b-0">
                                    <div class="flex items-center text-gray-600 text-xs mb-1">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ $job->application_end_date->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-800 leading-tight">{{ $job->title }}</h3>
                                    <a href="{{ route('jobs.show', $job) }}"
                                        class="text-blue-500 hover:underline text-xs mt-1 block">View Details →</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-900 border-b-2 border-green-500 pb-2">Events</h2>
                        <a href="{{ route('events.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Archive <i
                                class="fas fa-external-link-alt"></i></a>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 h-96 overflow-hidden relative border border-gray-200">
                        <div class="scrolling-container events-scroll absolute w-full top-0 left-0 px-4">
                            {{-- Loop for events (placeholder for procurement) --}}
                            @foreach($events as $event)
                                <div class="mb-4 pb-2 border-b border-gray-100 last:border-b-0">
                                    <div class="flex items-center text-gray-600 text-xs mb-1">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ $event->event_date->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-800 leading-tight">{{ $event->title }}</h3>
                                    <a href="{{ route('events.show', $event) }}"
                                        class="text-blue-500 hover:underline text-xs mt-1 block">Read More →</a>
                                </div>
                            @endforeach
                            {{-- Duplicate events for seamless scroll --}}
                            @foreach($events as $event)
                                <div class="mb-4 pb-2 border-b border-gray-100 last:border-b-0">
                                    <div class="flex items-center text-gray-600 text-xs mb-1">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ $event->event_date->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-800 leading-tight">{{ $event->title }}</h3>
                                    <a href="{{ route('events.show', $event) }}"
                                        class="text-blue-500 hover:underline text-xs mt-1 block">Read More →</a>
                                </div>
                            @endforeach
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

        <div>

            <!-- Departments Preview -->
            @if($departments->count() > 0)
                <section class="py-12 bg-white">
                    <div class="container mx-auto px-4">
                        <div class="flex justify-between items-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900">Our Departments</h2>
                            <a href="{{ route('departments.index') }}"
                                class="text-blue-600 hover:text-blue-800 font-medium">View All
                                →</a>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($departments as $department)
                                <div class="bg-white rounded-lg shadow-md p-6 notice-card">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $department->name }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        {{ \Illuminate\Support\Str::limit($department->description, 100) }}
                                    </p>
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