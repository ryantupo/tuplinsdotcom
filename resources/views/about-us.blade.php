@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<!-- Main Content Background Color -->
<style>
    body {
        background-color: #333333; /* Slightly lighter gray than navbar */
    }

    .about-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: #444444;
        border-radius: 0.5rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        color: #e0e0e0;
    }

    .profile-image {
        width: 250px; /* Fixed width for better appearance */
        height: 250px; /* Fixed height for better appearance */
        border-radius: 50%; /* Makes it a circle */
        object-fit: cover; /* Ensures the image covers the area */
        margin-bottom: 1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);

    }

    h1 {
        font-size: 2rem;
        text-align: center;
        margin-bottom: 1rem;
    }

    p {
        font-size: 1rem;
        line-height: 1.5;
    }
</style>

<div class="about-container">
    <div class="text-center">
        <img src="{{ asset('images/your-photo.jpg') }}" alt="Ryan Tuplin" class="profile-image"> <!-- Replace with your photo -->
        <h1>About Me</h1>
    </div>
    <br>
    <p>
        Hello! I'm Ryan, a passionate web developer with over four years of experience in the field. I graduated with a first-class degree from London Metropolitan University, where I also had the privilege of sharing my knowledge as a lecturer for two years.

        When I'm not coding, you can find me indulging in my hobbies. I love solving Rubik's cubes, hitting the gym for powerlifting, and practicing my speed coding skills. I'm also an avid Twitch streamer, where I enjoy sharing my coding journey and connecting with others. And of course, I can’t resist a good round of golf!

        I believe in the power of teaching and love helping others learn new skills. If you're interested in me building your website or web app, collaborating, or just want to chat about tech, feel free to reach out!
    </p>
    <br>
</div>
@endsection
