<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobitem = Job::orderBy('created_at', 'desc')->paginate(20);
        $data = array('title' => 'Home',
                    'jobitem' => $jobitem);
        return view('Job.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('title' => 'Create Job');
        return view('job.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'job_code'              => 'required|unique:job',
            'job_slug'              => 'required',
            'job_position'          => 'required',
            'job_address'           => 'required',
            'job_salary'            => 'required',
            'job_major'             => 'required',
            'job_description'       => 'required',
            'job_requirements'      => 'required',
            'job_type'              => 'required',
            'job_specialization'    => 'required',
        ]);
        $slug = \Str::slug($request->job_slug);
        $input = $request->all();
        $input['job_slug'] = $slug;
        $input['status'] = 'publish';
        $jobitem = Job::create($input);
        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobitem = Job::findOrFail($id);
        if ($jobitem->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
