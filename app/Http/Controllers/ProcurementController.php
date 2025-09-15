<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procurement;

class ProcurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Procurement::active()->orderByDesc('closing_date');

        if ($request->filled('type')) {
            $query->byType($request->get('type'));
        }
        if ($request->filled('status')) {
            $query->byStatus($request->get('status'));
        }

        $procurements = $query->paginate(12);
        return view('procurements.index', compact('procurements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Procurement $procurement)
    {
        return view('procurements.show', compact('procurement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
