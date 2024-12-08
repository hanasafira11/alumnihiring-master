<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class PageController extends Controller
{
    public function index() {
        $data = array('title' => 'Home');
        return view('pages.index', $data);
    }

    public function job() {
        $jobitem = Job::orderBy('created_at', 'desc')->get();
        $data = array(
            'title' => 'Jobs',
            'jobitem' => $jobitem
        );
        return view('pages.job', $data);
    }

    public function jobdetail($id) {
        $jobitem = Job::where('job_slug', $id)
                            ->where('status', 'publish')
                            ->first();
        if ($jobitem) {    
                $data = array(
                        'title' => $jobitem->job_position,
                        'jobitem' => $jobitem,
                        );
            return view('pages.jobdetail', $data);
        } else {
            return abort('404');
        }
    }

    public function about() {
        $data = array('title' => 'About us');
        return view('pages.about', $data);
    }
}
