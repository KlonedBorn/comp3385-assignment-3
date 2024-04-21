<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function create()
    {
        return view('property-create');
    }
    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('home');
    }
}
