@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/home.css')}}">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
<!-- <script src="{{ asset('js/modal.js') }}" defer></script> -->

@section('content')
<div class="container d-flex justify-content-center">

    @foreach($subjects as $s)
    <div class="card my-card">
        <!-- <img class="card-img-top img-subject" src="{{ asset('storage/subjects/' . $s->subject_id . '.jpg') }}" alt="Subject thumbnail" onerror="this.onerror=null; this.src='../storage/subjects/default.jpg';"> -->
        <img class="card-img-top img-subject" src="{{ asset('storage/subjects/' . $s->subject_id . '.jpg') }}" alt="Subject thumbnail" onerror="this.onerror=null; this.src=(`{{asset("storage/subjects/default.jpg")}}`);">
        <div class="card-body">
            <h5 class="card-title"><b>{{ $s->subject_name }}</b></h5>
            <p class="card-text">{{ $s->subject_description }}</p>
            <!-- <a href="/subject/{{ $s->subject_id }}" class="btn btn-primary">View Details</a> -->
            <a href="{{ route('subject.details', $s->subject_id) }}" class="btn btn-primary">View Details</a>
        </div>
    </div>
    @endforeach

</div>

<div class="d-flex justify-content-center m-5">
    {{ $subjects->links('pagination::bootstrap-4') }}
</div>
@endsection
