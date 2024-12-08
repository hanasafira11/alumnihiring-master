@extends('layouts.emp-template')

@section('content')
    <div class="index-main-emp">
        <div class="wrapper">
            <div class="section row">
                <div class="emp-card column bg-gray">
                    <div class="emp-card-header row">
                        <img src="/img/card-logo.png" alt="">
                        <h3>PT KOMINPO JAYA</h3>
                    </div>
                    <hr>
                    <div class="emp-card-body">
                        <div class="stats row">
                            <i class="fa-solid fa-user-group stats-icon"></i>
                            <p>80 - Total Kandidat</p>
                        </div>
                        <div class="stats row">
                            <i class="fa-solid fa-suitcase stats-icon"></i>
                            <p>03 - Total Lowongan</p>
                        </div>
                        <div class="stats2 row">
                            <i class="fa-solid fa-check-double stats-icon"></i>
                            <p>11 - Total Kandidat Diterima</p>
                        </div>
                    </div>
                </div>
                <div class="joblist-container column">
                    <div class="joblist-header row">
                        <a href="{{ route('job.create') }}" class="text-white bg-green add-loker">Tambah Lowongan</a>
                        <p>-- 3 Lowongan Kerja</p>
                    </div>
                    <div class="joblist column">

                        @foreach ($jobitem as $job)
                            <div class="job row bg-gray">
                                <img src="/img/card-logo.png" alt="">
                                <div class="job-title">
                                    <h4>{{ $job->job_position }}</h4>
                                    <p>PT KOMINPO JAYA</p>
                                </div>
                                <div class="divider"> </div>
                                <div class="count-kndt row">
                                    <i class="fa-solid fa-user-group stats-icon"></i>
                                    <p>40</p>
                                </div>
                                <div class="divider"> </div>
                                <div class="count-kndt row">
                                    <i class="fa-solid fa-check-double stats-icon"></i>
                                    <p>8</p>
                                </div>
                                <div class="divider"> </div>
                                <div class="action column">
                                    <a href="{{ URL::to('/employer/candidatelist') }}" class="btn bg-prim text-white">VIEW</a>
                                    <a href="#" class="btn btn-mid bg-green text-white">EDIT</a>
                                    <form action="{{ route('job.destroy', $job->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn bg-red text-white">
                                        DELETE
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach

                        <div class="job row bg-gray">
                            <img src="/img/card-logo.png" alt="">
                            <div class="job-title">
                                <h4>SENIOR PROGRAMMER</h4>
                                <p>PT KOMINPO JAYA</p>
                            </div>
                            <div class="divider"> </div>
                            <div class="count-kndt row">
                                <i class="fa-solid fa-user-group stats-icon"></i>
                                <p>40</p>
                            </div>
                            <div class="divider"> </div>
                            <div class="count-kndt row">
                                <i class="fa-solid fa-check-double stats-icon"></i>
                                <p>8</p>
                            </div>
                            <div class="divider"> </div>
                            <div class="action column">
                                <a href="{{ URL::to('/lowongan/kandidat') }}" class="btn bg-prim text-white">VIEW</a>
                                <a href="#" class="btn btn-mid bg-green text-white">EDIT</a>
                                <a href="#" class="btn bg-red text-white">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection