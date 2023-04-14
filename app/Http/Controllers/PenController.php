<?php

namespace App\Http\Controllers;

use App\Models\Pen;
use Illuminate\Http\Request;

class PenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pen::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:5']
        ]);

        $pen = new Pen($validated);
        $pen->save();

        return $pen;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pen $pen)
    {
        return $pen;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pen $pen)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:5']
        ]);

        $pen->title = $validated['title'];
        $pen->save();

        return $pen;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pen $pen)
    {
        $pen->delete();

        return response()->noContent();
    }
}
