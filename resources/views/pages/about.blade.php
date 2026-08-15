@extends('layouts.app')

@section('title', 'About | Phantom Tech')

@section('content')

<section class="page-header">
    <p class="section-label">01 — ABOUT US</p>
    <h1>WHO<br><span>ARE WE?</span></h1>
</section>

<section class="about-section">

    <div class="about-image">
        <img src="{{ asset('images/about.jpg') }}" alt="About Phantom Tech">
    </div>

    <div class="about-content">
        <p class="section-label">OUR STORY</p>

        <h2>BUILT TO <span>CREATE.</span></h2>

        <p>
            Phantom Tech was founded with a simple goal: to help
            businesses embrace technology without losing their identity.
            We combine creativity, technology, and strategy to develop
            solutions that make a real impact.
        </p>

        <p>
            Our team believes that technology should not simply follow
            trends. It should create new possibilities.
        </p>
    </div>

</section>

<section class="mission-grid">

    <div>
        <p class="section-label">MISSION</p>
        <h2>CREATE WITH <span>PURPOSE.</span></h2>
        <p>
            To provide innovative, reliable, and accessible technology
            solutions that help organizations grow and succeed.
        </p>
    </div>

    <div>
        <p class="section-label">VISION</p>
        <h2>SHAPE THE <span>FUTURE.</span></h2>
        <p>
            To become a trusted technology partner recognized for
            creativity, innovation, and meaningful digital solutions.
        </p>
    </div>

</section>

<section class="values">
    <p class="section-label">OUR CORE VALUES</p>

    <div class="value-grid">
        <div>
            <h3>01 — INNOVATION</h3>
            <p>We constantly explore new ideas and technologies.</p>
        </div>

        <div>
            <h3>02 — INTEGRITY</h3>
            <p>We build relationships through honesty and trust.</p>
        </div>

        <div>
            <h3>03 — CREATIVITY</h3>
            <p>We turn challenges into opportunities to create.</p>
        </div>

        <div>
            <h3>04 — EXCELLENCE</h3>
            <p>We strive to deliver quality in everything we do.</p>
        </div>
    </div>
</section>

<section class="team">
    <p class="section-label">OUR TEAM</p>

    <h2>THE PEOPLE BEHIND<br><span>THE VISION.</span></h2>

    <div class="team-grid">

        <div class="team-card">
            <img src="{{ asset('images/team-1.jpg') }}" alt="Team Member">
            <h3>ALEX REYES</h3>
            <p>Chief Executive Officer</p>
        </div>

        <div class="team-card">
            <img src="{{ asset('images/team-2.jpg') }}" alt="Team Member">
            <h3>MAYA SANTOS</h3>
            <p>Creative Director</p>
        </div>

        <div class="team-card">
            <img src="{{ asset('images/team-3.jpg') }}" alt="Team Member">
            <h3>JAY CRUZ</h3>
            <p>Lead Developer</p>
        </div>

    </div>
</section>

@endsection