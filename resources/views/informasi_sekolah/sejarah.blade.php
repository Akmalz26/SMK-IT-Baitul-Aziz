@extends('layouts.navbar')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Sejarah Sekolah</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container py-5">
            <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">SMK IT Baitul Aziz</h6>
                <h1 class="mb-5">Berita</h1>
            </div> -->
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="blog-item bg-light">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $sejarah->image) }}" alt="smk it baitul aziz" style="height: 400px; object-fit: cover;">
                </div>
                <div class="p-4">
                    <h3 class="mb-3">Sejarah Singkat</h3>
                    <p>{!! $sejarah->konten !!}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="bg-light p-4">
                <h4 class="mb-3">Video Terkait</h4>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/etHq7lI2-BE?si=_F3O2l6YX7B2UQO6" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection