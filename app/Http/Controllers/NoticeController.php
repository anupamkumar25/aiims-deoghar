<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Notice::active()->latest();
        
        if ($request->has('category')) {
            $query->byCategory($request->category);
        }
        
        $notices = $query->paginate(10);
        
        return view('notices.index', compact('notices'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        return view('notices.show', compact('notice'));
    }
}
