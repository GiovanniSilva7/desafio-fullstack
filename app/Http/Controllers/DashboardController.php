<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\LandingData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function edit()
    {
        $dashboard = LandingData::first();
        return view('edit-dashboard', compact('dashboard'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'backgroundimg' => 'required|url',
            'titulo' => 'required|string',
            'subtitulo' => 'required|string',
        ]);
        
        $dashboard = LandingData::first();
        if($dashboard) {
            $dashboard->update($data);
        } else {
            LandingData::create($data);
        }
        
        return redirect()->route('edit-dashboard')->with('success', 'Updated Successfully!');
    }

    public function show()
    {
        $dashboard = LandingData::first();
        return view('edit-dashboard', compact('edit-dashboard'));
    }
}
