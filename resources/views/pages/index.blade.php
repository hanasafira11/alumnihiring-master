@extends('layouts.template')

@section('content')
    <div class="index-main">
        <div class="wrapper">
            <div class="sec-1 row">
                <div class="col-1">
                    <h1 class="text-black">Selamat datang di</h1>
                    <h1 class="almn">Alumni<span class="fw-bold">Hiring!</span></h1>
                    <p class="prf-1 text-black">Temukan lowongan pekerjaan yang tepat untuk anda!</p>
                    <a href="{{ URL::to('job') }}" class="btn-1 text-white bg-sec">Cari pekerjaan</a>
                </div>
                <img class="home-1" src="/img/home-1.png" alt="">
            </div>
        </div>

        <div class="bg-gray">
            <div class="wrapper">
                <div class="sec-2 row">
                    <img class="home-2" src="/img/home-2.png" alt="">
                    <div class="col-2">
                        <p class="prf-2">Cari kandidat yang sempurna<br>untuk industri anda!</p>
                        <a href="#" class="btn-2">Cari alumni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection