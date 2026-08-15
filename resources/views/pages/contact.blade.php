@extends('layouts.app')

@section('title', 'Contact | Phantom Tech')

@section('content')

<section class="page-header">
    <p class="section-label">03 — GET IN TOUCH</p>
    <h1>LET'S<br><span>TALK.</span></h1>
</section>

<section class="contact-section">

    <div class="contact-info">

        <p class="section-label">CONTACT INFORMATION</p>

        <h2>WE'D LOVE TO<br><span>HEAR FROM YOU.</span></h2>

        <div class="contact-details">
            <p>
                <strong>ADDRESS</strong><br>
                123 Liitchi Avenue,<br>
                Laguna, Philippines
            </p>

            <p>
                <strong>EMAIL</strong><br>
                hello@phantomtech.com
            </p>

            <p>
                <strong>PHONE</strong><br>
                +63 912 345 6789
            </p>
        </div>

        <div class="social-links">
            <a href="#">FACEBOOK</a>
            <a href="#">INSTAGRAM</a>
            <a href="#">LINKEDIN</a>
        </div>

    </div>

    <div class="contact-form">

        <form>

            <label for="name">YOUR NAME</label>
            <input type="text" id="name" placeholder="Enter your name">

            <label for="email">YOUR EMAIL</label>
            <input type="email" id="email" placeholder="Enter your email">

            <label for="subject">SUBJECT</label>
            <input type="text" id="subject" placeholder="What's this about?">

            <label for="message">MESSAGE</label>
            <textarea id="message" rows="6" placeholder="Tell us about your idea..."></textarea>

            <button type="submit" class="btn">
                SEND MESSAGE →
            </button>

        </form>

    </div>

</section>

@endsection