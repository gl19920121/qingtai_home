<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate();

        return view('index', compact('jobs'));
    }
}
