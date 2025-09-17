<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke() {
        $jobs = Job::where('title', 'like', '%'.request('search').'%')->get();
        return view('jobs.results', ['jobs' => $jobs
        ]);
    }
}
