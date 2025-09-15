<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Event;
use App\Models\JobPosting;
use App\Models\GalleryImage;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $this->authorize('admin');

        $stats = [
            'notices' => Notice::count(),
            'events' => Event::count(),
            'jobs' => JobPosting::count(),
            'images' => GalleryImage::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}


