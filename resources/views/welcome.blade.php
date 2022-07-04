@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <p class="card-text">What is <span class="text-span">MyTutor for Tutors</span>?</p>
        </div>
        <div class="card-body d-flex justify-content-center">
            <p class="card-text">
                <span class="text-span">MyTutor for Tutors</span> is a web app for tutors or lecturers who are freelancing or looking for some extra <i>Cheddar Cheese</i>.
                Back during the pandemic, we had one and only primary goal, which was to provide a platform for lecturers or teachers who got hit hard by the era of isolation of March 2020. 
                But, overtime, we grew larger and many people claimed to be greatly helped by MyTutor platform.
                Students and tutors alike have given us good reviews, and we liked it so much that we decided to expand the platform and make it the number 1 online tutoring platform.
                <br>
                <span class="plus-ultra">
                    <i><b>PLUS ULTRA!!!</b></i>
                </span>
                <br><br>
                <i>**This website is currently under construction and is planned to be live on the 7th of July, 2022.</i>
            </p>
        </div>
    </div>
    @guest
    <div class="wrapper d-flex align-items-center">
        <div class="container card py-5">
            <center>
            <h3>In the meantime, here is what you can do</h3>
            <a href="{{ route('login') }}" class="btn btn-primary">Login to your account</a>
            <a href="{{ route('register') }}" class="btn bg-warning">Register as a tutor</a>
            </center>
        </div>
        <div class="container">
            <center>
            <img class="construction-img" src="{{ asset('assets/images/SEO Company Piccadilly London.gif') }}" alt="">
            <h4 class="construction-text">
                We are always building behind the scenes
                <br>
                for your great comfort.
            </h4>
            </center>
        </div>
    </div>
    @endguest
</div>
@endsection