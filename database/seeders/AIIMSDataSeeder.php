<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notice;
use App\Models\JobPosting;
use App\Models\Event;
use App\Models\Department;
use App\Models\Course;
use App\Models\Procurement;
use App\Models\Statistic;

class AIIMSDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Statistics
        Statistic::create([
            'name' => 'O.P.D Registration',
            'today_count' => 45,
            'total_count' => 12500,
            'icon' => '🏥',
            'is_active' => true
        ]);

        Statistic::create([
            'name' => 'I.P.D Admission',
            'today_count' => 12,
            'total_count' => 3200,
            'icon' => '🛏️',
            'is_active' => true
        ]);

        Statistic::create([
            'name' => 'Emergency',
            'today_count' => 8,
            'total_count' => 1800,
            'icon' => '🚨',
            'is_active' => true
        ]);

        Statistic::create([
            'name' => 'Lab Test',
            'today_count' => 156,
            'total_count' => 45000,
            'icon' => '🧪',
            'is_active' => true
        ]);

        // Create sample notices
        Notice::create([
            'title' => 'Provisional Eligibility List of 08th Rolling Faculty Recruitment Phase 2',
            'description' => 'With reference to Advt No: AIIMS/Deo/Rect.Cell/2025-26/1971/Phase 2, Dated-18.06.2025',
            'category' => 'recruitment',
            'notice_date' => now()->subDays(5),
            'is_active' => true,
            'is_featured' => true,
            'priority' => 1
        ]);

        Notice::create([
            'title' => 'List of Selected candidates for Integrated (BPH+MPH) Program',
            'description' => 'Through Counselling on 08/09/2025 held at AIIMS Deoghar',
            'category' => 'academic',
            'notice_date' => now()->subDays(3),
            'is_active' => true,
            'is_featured' => true,
            'priority' => 2
        ]);

        // Create sample events
        Event::create([
            'title' => 'Cyclothon conduction at AIIMS Deoghar',
            'description' => 'As a part of World No Tobacco Day 2025',
            'event_type' => 'awareness',
            'event_date' => now()->addDays(15),
            'start_time' => '06:00',
            'end_time' => '09:00',
            'venue' => 'AIIMS Deoghar Campus',
            'organizer' => 'AIIMS Deoghar',
            'is_active' => true,
            'is_featured' => true
        ]);

        // Create sample jobs
        JobPosting::create([
            'title' => 'Senior Resident (Non-Academic)',
            'description' => 'Offline applications for appointment to the posts of Senior Resident',
            'department' => 'General Medicine',
            'position_type' => 'non-faculty',
            'qualification' => 'MBBS with MD/MS in relevant specialty',
            'experience' => 'Minimum 3 years',
            'vacancies' => 5,
            'application_start_date' => now()->subDays(10),
            'application_end_date' => now()->addDays(20),
            'is_active' => true,
            'is_featured' => true
        ]);

        // Create sample departments
        Department::create([
            'name' => 'General Medicine',
            'slug' => 'general-medicine',
            'description' => 'Department of General Medicine provides comprehensive medical care',
            'head_of_department' => 'Dr. Rajesh Kumar',
            'email' => 'general.medicine@aiimsdeoghar.edu.in',
            'phone' => '06432-277220',
            'services' => 'OPD, IPD, Emergency Care, Consultation',
            'is_active' => true,
            'sort_order' => 1
        ]);

        Department::create([
            'name' => 'Cardiology',
            'slug' => 'cardiology',
            'description' => 'Advanced cardiac care including interventional cardiology',
            'head_of_department' => 'Dr. Priya Sharma',
            'email' => 'cardiology@aiimsdeoghar.edu.in',
            'phone' => '06432-277221',
            'services' => 'Cardiac OPD, Cath Lab, Cardiac Surgery, ICU',
            'is_active' => true,
            'sort_order' => 2
        ]);
    }
}
