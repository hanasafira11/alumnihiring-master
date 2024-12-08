<header class="bg-prim">
    <div class="smtn wrapper">
        <div class="row">
            <h4 class="fw-reg text-white">Alumni</h4>
            <h4 class="fw-bold text-white">Hiring</h4>
        </div>
        <nav>
            <ul class="row">
                <li><a class="text-white" href="/employer/">Home</a></li>
                <li><a class="text-white" href="{{ URL::to('job') }}">Lowongan Kerja</a></li>
                <li><a class="text-white" href="{{ URL::to('employer/about') }}">About</a></li>
            </ul>
        </nav>
        <div class="nav-btn">
            <a class="btn-one bg-white text-black rounded-one" href="{{ URL::to('login') }}">Login</a>
            <a class="btn-one bg-white text-black rounded-one" href="{{ URL::to('switch') }}">Switch to recruit</a>
        </div>
    </div>
</header>
