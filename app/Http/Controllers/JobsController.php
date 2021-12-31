<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::paginate();

        return view('jobs', compact('jobs'));
    }

    public function show(Job $job, Request $request)
    {
        return view('jobs.show', compact('job'));
    }
}
