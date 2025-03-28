<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;
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
    public function store(Request $request)
    {
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return Inertia::location(route('inertia.index'));
    }
}
