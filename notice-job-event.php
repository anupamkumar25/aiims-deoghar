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













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Statistics Dashboard</title>
    <style>
        /* General body and font styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        /* Container for the entire dashboard */
        .dashboard-container {
            max-width: 1200px;
            margin: auto;
        }

        /* Section header styling */
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #444;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #e74c3c; /* Red underline */
            padding-bottom: 5px;
            display: inline-block;
        }

        /* Main statistics grid layout */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        /* Styling for each individual statistic card */
        .stat-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Styling for the icon at the top of the card */
        .icon-circle {
            width: 100px;
            height: 100px;
            background-color: #f8f8f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            border: 2px solid #ccc;
        }

        .icon-circle img {
            width: 70px;
            height: 70px;
        }

        /* Styling for the numbers (Today & Total) */
        .stat-numbers {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 10px;
        }

        .number-group {
            text-align: center;
        }

        .number-label {
            font-size: 14px;
            color: #666;
            text-transform: uppercase;
            font-weight: bold;
        }

        .number-value {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-top: 5px;
        }

        /* Styling for the text description at the bottom */
        .stat-text {
            font-size: 16px;
            color: #555;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 0.5px;
            margin-top: 15px;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }

        /* Loading state styling */
        #loading-message {
            text-align: center;
            font-size: 18px;
            color: #666;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <div class="header">STATISTICS</div>

        <div id="loading-message">Loading data...</div>

        <div class="stats-grid" id="stats-grid" style="display: none;">
            
            <div class="stat-card">
                <div class="icon-circle">
                    <img src="https://via.placeholder.com/70/4a90e2/fff?text=OPD" alt="OPD Icon">
                </div>
                <div class="stat-numbers">
                    <div class="number-group">
                        <div class="number-label">Today</div>
                        <div class="number-value" id="opd-today">---</div>
                    </div>
                    <div class="number-group">
                        <div class="number-label">Total</div>
                        <div class="number-value" id="opd-total">---</div>
                    </div>
                </div>
                <div class="stat-text">O.P.D REGISTRATION</div>
            </div>

            <div class="stat-card">
                <div class="icon-circle">
                    <img src="https://via.placeholder.com/70/50c878/fff?text=IPD" alt="IPD Icon">
                </div>
                <div class="stat-numbers">
                    <div class="number-group">
                        <div class="number-label">Today</div>
                        <div class="number-value" id="ipd-today">---</div>
                    </div>
                    <div class="number-group">
                        <div class="number-label">Total</div>
                        <div class="number-value" id="ipd-total">---</div>
                    </div>
                </div>
                <div class="stat-text">I.P.D ADMISSION</div>
            </div>

            <div class="stat-card">
                <div class="icon-circle">
                    <img src="https://via.placeholder.com/70/e74c3c/fff?text=24/7" alt="Emergency Icon">
                </div>
                <div class="stat-numbers">
                    <div class="number-group">
                        <div class="number-label">Today</div>
                        <div class="number-value" id="emergency-today">---</div>
                    </div>
                    <div class="number-group">
                        <div class="number-label">Total</div>
                        <div class="number-value" id="emergency-total">---</div>
                    </div>
                </div>
                <div class="stat-text">EMERGENCY</div>
            </div>

            <div class="stat-card">
                <div class="icon-circle">
                    <img src="https://via.placeholder.com/70/8e44ad/fff?text=LAB" alt="Lab Test Icon">
                </div>
                <div class="stat-numbers">
                    <div class="number-group">
                        <div class="number-label">Today</div>
                        <div class="number-value" id="lab-today">---</div>
                    </div>
                    <div class="number-group">
                        <div class="number-label">Total</div>
                        <div class="number-value" id="lab-total">---</div>
                    </div>
                </div>
                <div class="stat-text">LAB TEST</div>
            </div>

        </div>
    </div>

    <script>
        // The URL of your backend API endpoint
        // REPLACE 'YOUR_API_ENDPOINT_HERE' with your actual API URL
        const API_URL = 'YOUR_API_ENDPOINT_HERE';

        // Function to fetch data from the API and update the dashboard
        async function fetchStatistics() {
            const loadingMessage = document.getElementById('loading-message');
            const statsGrid = document.getElementById('stats-grid');
            
            // Show loading message and hide the grid initially
            loadingMessage.style.display = 'block';
            statsGrid.style.display = 'none';

            try {
                // Fetch the data from the API
                const response = await fetch(API_URL);

                // Check if the request was successful
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                // Parse the JSON data from the response
                const data = await response.json();

                // Update the HTML elements with the fetched data
                document.getElementById('opd-today').textContent = data.opd.today.toLocaleString();
                document.getElementById('opd-total').textContent = data.opd.total.toLocaleString();
                
                document.getElementById('ipd-today').textContent = data.ipd.today.toLocaleString();
                document.getElementById('ipd-total').textContent = data.ipd.total.toLocaleString();
                
                document.getElementById('emergency-today').textContent = data.emergency.today.toLocaleString();
                document.getElementById('emergency-total').textContent = data.emergency.total.toLocaleString();
                
                document.getElementById('lab-today').textContent = data.lab_test.today.toLocaleString();
                document.getElementById('lab-total').textContent = data.lab_test.total.toLocaleString();
                
                // Hide loading message and show the grid
                loadingMessage.style.display = 'none';
                statsGrid.style.display = 'grid';

            } catch (error) {
                console.error('Error fetching data:', error);
                loadingMessage.textContent = 'Failed to load data. Please try again later.';
            }
        }

        // Call the function to fetch and display data when the page loads
        fetchStatistics();

        // Optional: Set an interval to refresh the data automatically
        // Example: Refresh every 5 minutes (300,000 milliseconds)
        // setInterval(fetchStatistics, 300000);

    </script>
</body>
</html>