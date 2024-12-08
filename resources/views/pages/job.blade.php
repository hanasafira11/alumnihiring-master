@extends('layouts.template')

@section('content')
    <div class="job-main">
        <div class="wrapper">
            <div class="find row">
                <div class="search-bar">
                    <form action="" method="">
                        <input type="text" name="search" class="search-text bg-gray" id="" placeholder="Search...">
                        <button type="submit" class="search-btn bg-prim"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                    </form>
                </div>
                <div class="category">
                    <select name="category" id="" class="bg-gray">
                        <option value="">Pilih kategori...</option>
                        <option value="rpl">Rekayasa Perangkat Lunak</option>
                        <option value="tkj">Teknik Komputer Jaringan</option>
                        <option value="elin">Elektronika</option>
                        <option value="mnk">Mekatronika</option>
                    </select>
                </div>
            </div>
            <div class="job-list">

                @foreach ($jobitem as $job)
                    <a href="{{ URL::to('job/'.$job->job_slug ) }}" class="text-black">
                        <div class="card">
                            <div class="card-header row">
                                <img src="/img/card-logo.png" alt="">
                                <div class="card-title column">
                                    <h4>{{ $job->job_position }}</h4>
                                    <p>PT Kominpo</p>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="card-detail row">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>{{ $job->job_address }}</p>
                                </div>
                                <div class="card-detail row">
                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                    <p>IDR {{ number_format($job->job_salary, 2) }} / Month</p>
                                </div>
                                <div class="card-detail row">
                                    <i class="fa-solid fa-suitcase"></i>
                                    <p>{{ $job->job_major }}</p>
                                </div>
                            </div>
                            <div class="card-footer row">
                                <i class="fa-solid fa-hourglass-end"></i>
                                <p>Ditambahkan 3 jam yang lalu</p>
                            </div>
                        </div>
                    </a>
                @endforeach

                <div class="card">
                    <div class="card-header row">
                        <img src="/img/card-logo.png" alt="">
                        <div class="card-title column">
                            <h4>Senior Developer</h4>
                            <p>PT Kominpo</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="card-detail row">
                            <i class="fa-solid fa-location-dot"></i>
                            <p> Singosari, Malang</p>
                        </div>
                        <div class="card-detail row">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                            <p>IDR 5.000.000 / Bulan</p>
                        </div>
                        <div class="card-detail row">
                            <i class="fa-solid fa-suitcase"></i>
                            <p>Rekayasa Perangkat Lunak</p>
                        </div>
                    </div>
                    <div class="card-footer row">
                        <i class="fa-solid fa-hourglass-end"></i>
                        <p>Ditambahkan 3 jam yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection