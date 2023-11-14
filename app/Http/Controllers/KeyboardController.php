<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use Illuminate\Http\Request;
use Laravel\Prompts\Key;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('keyboard',[
                "title" => "Keyboard",
                "keyboard" =>keyboard::all()
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
    public function show(Keyboard $keyboard)
    {
        return view('detailkeyboard', [
            "title" => "Detail Mouse",
            "keyboard" => Keyboard::find($keyboard),
            "kb" => $keyboard,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keyboard $keyboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keyboard $keyboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keyboard $keyboard)
    {
        $keyboard->delete();

        return redirect()->route('keyboard.index')
            ->with('success', 'Data deleted successfully');
    }
}
