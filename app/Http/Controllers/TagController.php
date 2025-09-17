<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tags) {
        return view('jobs.results', ['jobs' => $tags->jobs
        ]);
    }
}
