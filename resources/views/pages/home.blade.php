@extends('layouts.app')

@section('title', 'Home | Phantom Tech')

@section('content')

<section class="hero">
    <div class="hero-content">
        <p class="hero-tag">WELCOME TO PHANTOM TECH</p>

        <h1>CHANGE THE<br><span>DIGITAL WORLD.</span></h1>

        <p class="hero-description">
            We create bold digital solutions that help businesses
            break boundaries and build their future.
        </p>

        <a href="{{ route('services') }}" class="btn">
            EXPLORE SERVICES →
        </a>
    </div>

    <div class="hero-image">
        <img src="{{ asset('images/hero.jpg') }}" alt="Phantom Tech">
    </div>
</section>

<section class="intro">
    <p class="section-label">01 — WHO WE ARE</p>

    <h2>WE BUILD. WE CREATE.<br>WE <span>TRANSFORM.</span></h2>

    <p>
        Phantom Tech is a modern technology company dedicated to
        creating innovative and reliable digital solutions.
        From websites and mobile applications to cloud systems
        and cybersecurity, we help businesses turn ideas into
        meaningful digital experiences.
    </p>
</section>

<section class="featured">
    <p class="section-label">02 — FEATURED SERVICES</p>

    <div class="service-grid">

        <div class="service-card">
            <span>01</span>
            <h3>WEB DEVELOPMENT</h3>
            <p>Powerful and responsive websites built for modern businesses.</p>
        </div>

        <div class="service-card">
            <span>02</span>
            <h3>MOBILE DEVELOPMENT</h3>
            <p>Modern mobile experiences designed for today's users.</p>
        </div>

        <div class="service-card">
            <span>03</span>
            <h3>UI/UX DESIGN</h3>
            <p>Creative interfaces that are beautiful, intuitive, and effective.</p>
        </div>

    </div>

    <a href="{{ route('services') }}" class="btn btn-dark">
        VIEW ALL SERVICES →
    </a>
</section>

<section class="cta">
    <p class="section-label">READY?</p>

    <h2>LET'S CREATE<br>SOMETHING <span>UNFORGETTABLE.</span></h2>

    <a href="{{ route('contact') }}" class="btn">
        CONTACT US →
    </a>
</section>

@endsection