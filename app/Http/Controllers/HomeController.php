<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Event;
use App\Models\JobPosting;
use App\Models\Statistic;
use App\Models\Department;

class HomeController extends Controller
{
    public function index()
    {
        $notices = Notice::active()->orderByDesc('notice_date')->take(5)->get();
        $events = Event::active()->orderByDesc('event_date')->take(6)->get();
        $jobs = JobPosting::active()->latest()->take(5)->get();
        $statistics = Statistic::active()->get();
        $departments = Department::active()->take(6)->get();

        return view('home', compact('notices', 'events', 'jobs', 'statistics', 'departments'));
    }
}
