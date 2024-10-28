@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<!-- Main Content Background Color -->
<style>
    body {
        background-color: #333333; /* Slightly lighter gray than navbar */
    }

    h1,h2,h3,a, {
        font-family: 'Norwester', sans-serif;
        text-transform: uppercase;
    }

    .section {
        background-color: #f0f0f0; /* Light grey for sections to contrast */
        border-radius: 20px; /* Match the header rounding */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Softer shadow */
        margin-bottom: 20px;
        padding: 1.5rem; /* Increase padding for cleaner space */
    }

    .carousel-inner img {
        border-radius: 20px; /* Match the same rounded corners */
    }
</style>






<!-- Spacing Below Carousel Header -->
<div style="height: 20px;"></div> <!-- Increased space for more padding -->








<!-- Spacing Below Carousel Header -->
<div style="height: 20px;"></div> <!-- Increased space for more padding -->




<!-- Spacing Between Sections -->
<div style="height: 20px;"></div> <!-- Ensure spacing between sections -->



<script>
    $(document).ready(function(){
        $('.testimonials-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3, // Show 3 testimonials at a time on larger screens
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            centerMode: true, // Enable centering
            centerPadding: '0px', // No padding for centering
            responsive: [
                {
                    breakpoint: 768, // Mobile breakpoint
                    settings: {
                        slidesToShow: 1, // Show 1 testimonial on mobile
                        centerMode: true, // Enable centering
                        centerPadding: '0px', // No extra padding
                    }
                }
            ]
        });
    });
</script>

<style>

    .text-primary {
        color: #A3CA33;
    }

    .testimonials-carousel {
        display: flex;
        justify-content: center; /* Center the carousel */
    }

    .testimonial {
        width: 100%; /* Full width of the parent container */
        box-sizing: border-box; /* Include padding and border in the element's total width */
    }

    /* Centering the testimonials inside the carousel */
    .slick-slide {
        display: flex !important; /* Flexbox for centering */
        justify-content: center; /* Center contents of the slide */
        height: 100%; /* Ensures uniform height */
    }
</style>







@endsection
