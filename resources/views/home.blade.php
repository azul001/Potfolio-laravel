@extends('layouts.app')

@section('content')

<!-- ================= VIDEO MODAL ================= -->
<div class="modal fade" id="videoModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= HEADER ================= -->
<div class="container-fluid bg-primary d-flex align-items-center py-5" id="home" style="min-height:100vh;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">
                @if($user?->profile_pic)
                    <img class="img-fluid rounded-circle shadow-sm"
                         src="{{ asset('storage/'.$user->profile_pic) }}">
                @endif
            </div>

            <div class="col-lg-7 text-center text-lg-left">
                <h3 class="text-white mb-3">I'm</h3>
                <h1 class="display-3 text-uppercase text-primary">
                    {{ $user?->name }}
                </h1>

                <div class="typed-text d-none">{{ $user?->job }}</div>

                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">

                    @if($setting?->cv_url)
                        <a href="{{ $setting->cv_url }}" class="btn btn-outline-light mr-4">
                            Download CV
                        </a>
                    @endif

                    @if($setting?->video_url)
                        <button class="btn-play"
                                data-toggle="modal"
                                data-src="{{ $setting->video_url }}"
                                data-target="#videoModal">
                            <span></span>
                        </button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= ABOUT ================= -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">
                @if($setting?->about_photo)
                    <img class="img-fluid rounded"
                         src="{{ asset('storage/'.$setting->about_photo) }}">
                @endif
            </div>

            <div class="col-lg-7">
                <h3>{{ $setting?->about_title }}</h3>
                <p>{{ $setting?->about_description }}</p>

                <div class="row">
                    <div class="col-sm-6">Name: {{ $user?->name }}</div>
                    <div class="col-sm-6">Email: {{ $user?->email }}</div>
                    <div class="col-sm-6">Phone: {{ $user?->phone }}</div>
                    <div class="col-sm-6">Address: {{ $user?->address }}</div>
                </div>

                @if($setting?->freelance_url)
                    <a href="{{ $setting->freelance_url }}" class="btn btn-outline-primary mt-3">
                        Hire Me
                    </a>
                @endif
            </div>

        </div>
    </div>
</div>

<!-- ================= SKILLS ================= -->
<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="row">
            @foreach($skills as $skill)
                <div class="col-md-6 mb-3">
                    <strong>{{ $skill->name }}</strong>
                    <div class="progress">
                        <div class="progress-bar"
                             style="width:{{ $skill->percent }}%; background:{{ $skill->color }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ================= SERVICES ================= -->
<div class="container-fluid py-5" id="service">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="col-md-4 text-center mb-4">
                    <i class="{{ $service->icon }} fa-3x text-primary mb-3"></i>
                    <h5>{{ $service->name }}</h5>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ================= PORTFOLIO ================= -->
<div class="container-fluid py-5" id="portfolio">
    <div class="container">
        <div class="row">
            @foreach($portfolios as $portfolio)
                <div class="col-md-4 mb-4">
                    <img class="img-fluid rounded"
                         src="{{ asset('storage/'.$portfolio->image) }}">
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ================= TESTIMONIAL ================= -->
<div class="container-fluid py-5" id="testimonial">
    <div class="container">
        <div class="row">
            @foreach($reviewers as $review)
                <div class="col-md-4 text-center">
                    <p>{{ $review->description }}</p>
                    <strong>{{ $review->name }}</strong>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- ================= FOOTER ================= -->
<div class="container-fluid bg-primary text-white py-5">
    <div class="container text-center">

        <div class="mb-4">
            @if($setting?->github_url)
                <a href="{{ $setting->github_url }}" class="btn btn-light mr-2">
                    <i class="fab fa-github"></i>
                </a>
            @endif

            @if($setting?->fb_url)
                <a href="{{ $setting->fb_url }}" class="btn btn-light mr-2">
                    <i class="fab fa-facebook"></i>
                </a>
            @endif

            @if($setting?->linkedin_url)
                <a href="{{ $setting->linkedin_url }}" class="btn btn-light">
                    <i class="fab fa-linkedin"></i>
                </a>
            @endif
        </div>

        <p class="m-0">&copy; {{ date('Y') }} All Rights Reserved</p>

    </div>
</div>

@endsection
