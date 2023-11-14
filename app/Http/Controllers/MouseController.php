<?php

namespace App\Http\Controllers;

use App\Models\Mouse;
use Illuminate\Http\Request;

class MouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mouse',[
                "title" => "Keyboard",
                "mouse" =>mouse::all()
            ]
        );
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
    public function show(Mouse $mouse)
    {
        return view('detailmice', [
            "title" => "Detail Mouse",
            "mouse" => Mouse::find($mouse),
            "ms" => $mouse,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mouse $mouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mouse $mouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mouse $mouse)
    {
        $mouse->delete();

        return redirect()->route('mouse.index')
            ->with('success', 'Data deleted successfully');
    }
}
