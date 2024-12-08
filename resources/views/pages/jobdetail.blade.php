@extends('layouts.template')

@section('content')
<div class="jobdetail-main">
    <div class="wrapper">
        <section class="head-detail">
            <img src="/img/card-logo.png" width="60px" alt=''/>
            <div class="col-name">
                <h3>{{ $jobitem->job_position }}</h3>
                <h4>PT Kominfo Indonesia - Malang</h4>
            </div>
            <div class="col-btn-blue">
                <a href="#" class="btn-rounded-full bg-blue">Daftar</a>
            </div>
        </section>
        <section class="isi">
            <div class="col-desc">
                <h3>Job Description</h3>
                <p style="word-break: break-all">
                    {{ $jobitem->job_description }}
                </p>
            </div>
            <div class="col-requirements">
                <h3>Job Requirements</h3>
                <ul>
                    @foreach ( $jobitem->job_requirements as $job_requirement )
                        <li>{{ $job_requirement }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-type">
                <h3>Job Type</h3>
                <h5>{{ $jobitem->job_type }}</h5>
            </div>
            <div class="col-spzl">
                <h3>Job Specialization</h3>
                <h5>{{ $jobitem->job_specialization}}</h5>
            </div>
        </section>
    </div>
</div>
@endsection