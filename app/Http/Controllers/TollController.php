<?php

namespace App\Http\Controllers;

use App\Models\Toll;
use Illuminate\Http\Request;

class TollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tolls = Toll::all();

        return view('tolls', compact("tolls"));
    }
}
