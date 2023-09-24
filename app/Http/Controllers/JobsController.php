<?php

namespace App\Http\Controllers;

class JobsController extends Controller
{
    public function post_job()
    {
        return view('post_job');
    }

    public function job_details()
    {
        return view('job_detail');
    }
}
