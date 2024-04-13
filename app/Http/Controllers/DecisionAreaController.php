<?php

namespace App\Http\Controllers;

use App\Models\DecisionArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DecisionAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $decisionAreas = DecisionArea::query()->orderBy('id')->paginate(5);
        // dd($decisionAreas);
        return view('decisionArea.index', ['decisionArea' => $decisionAreas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('decisionArea.create');
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
    public function show(DecisionArea $decisionArea)
    {
        return view('decisionArea.show', ['decisionArea' => $decisionArea]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DecisionArea $decisionArea)
    {
        return view('decisionArea.edit', ['decisionArea' => $decisionArea]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DecisionArea $decisionArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DecisionArea $decisionArea)
    {
        //
    }
}
