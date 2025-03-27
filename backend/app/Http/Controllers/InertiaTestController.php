<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;
use Illuminate\Validation\ValidationException;
class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/Index');
    }
    public function create()
    {
        return Inertia::render('Inertia/Create');

    }
    public function show($id)
    {
        return Inertia::render('Inertia/Show', ['id' => $id]);
    }
    // App\Http\Controllers\InertiaTestController.php
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => ['required','max:20'],
            'content' => ['required']
        ]);
        return to_route('inertia.index');

           
        // try {
        //     $request->validate([
        //         'title' => ['required','max:20'],
        //         'content' => ['required']
        //     ]);

        //     InertiaTest::create([
        //         'title' => $request->title,
        //         'content' => $request->content,
        //     ]);
        //     return to_route('inertia.index');
        
        // }
        // catch (ValidationException $e) {
        //     return Inertia::render('Inertia/Create', [
        //         'errors' => $e->errors(),
                
        //     ]);
        // }
        

    
        
        // Inertia::location() は使わない
        
    }

}
