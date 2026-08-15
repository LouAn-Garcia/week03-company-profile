@extends('layouts.app')

@section('title', 'Services | Phantom Tech')

@section('content')

<section class="page-header">
    <p class="section-label">02 — WHAT WE DO</p>
    <h1>OUR<br><span>SERVICES.</span></h1>
</section>

<section class="services-section">

    <div class="service-card-large">
        <span>01</span>
        <img src="{{ asset('images/web-development.jpg') }}" alt="Web Development">
        <h2>WEB DEVELOPMENT</h2>
        <p>
            We build responsive, secure, and high-performance websites
            designed around your business goals.
        </p>
    </div>

    <div class="service-card-large">
        <span>02</span>
        <img src="{{ asset('images/mobile-development.jpg') }}" alt="Mobile Development">
        <h2>MOBILE DEVELOPMENT</h2>
        <p>
            We create modern mobile applications that deliver smooth
            and engaging experiences across devices.
        </p>
    </div>

    <div class="service-card-large">
        <span>03</span>
        <img src="{{ asset('images/uiux.jpg') }}" alt="UI UX Design">
        <h2>UI/UX DESIGN</h2>
        <p>
            We design intuitive and visually engaging interfaces
            focused on usability and user experience.
        </p>
    </div>

    <div class="service-card-large">
        <span>04</span>
        <img src="{{ asset('images/cloud.jpg') }}" alt="Cloud Solutions">
        <h2>CLOUD SOLUTIONS</h2>
        <p>
            We help businesses utilize scalable and reliable
            cloud technologies.
        </p>
    </div>

    <div class="service-card-large">
        <span>05</span>
        <img src="{{ asset('images/cybersecurity.jpg') }}" alt="Cybersecurity">
        <h2>CYBERSECURITY</h2>
        <p>
            We provide security-focused solutions that help protect
            digital systems and valuable information.
        </p>
    </div>

    <div class="service-card-large">
        <span>06</span>
        <img src="{{ asset('images/consulting.jpg') }}" alt="IT Consulting">
        <h2>IT CONSULTING</h2>
        <p>
            We provide technology guidance that helps organizations
            make smarter digital decisions.
        </p>
    </div>

</section>

<section class="cta">
    <h2>HAVE AN IDEA?<br><span>LET'S MAKE IT REAL.</span></h2>

    <a href="{{ route('contact') }}" class="btn">
        START A CONVERSATION →
    </a>
</section>

@endsection