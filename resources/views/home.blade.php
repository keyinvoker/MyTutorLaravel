@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/home.css')}}">

@section('content')
@if($subjects->isEmpty())
<center>
    <div class="container">
        <div>
            <h3>
                You currently do not have any subject in your teaching list.
            </h3>
        </div>
        <div>
            <a href="{{ route('subject.insertForm') }}" class="btn btn-warning">Insert a new subject</a>
        </div>
    </div>
</center>
@else
<div class="container d-flex justify-content-center">
    @foreach($subjects as $s)
    <div class="card my-card">
        <img class="card-img-top img-subject" src="{{ asset('storage/subjects/' . $s->subject_id . '.jpg') }}" alt="Subject thumbnail" onerror="this.onerror=null; this.src=`../storage/subjects/default.jpg`">
        <div class="card-body">
            <h5 class="card-title"><b>{{ $s->subject_name }}</b></h5>
            <p class="card-text">{{ $s->subject_description }}</p>
            <a href="{{ route('subject.details', $s->subject_id) }}" class="btn btn-primary">View Details</a>
        </div>
    </div>
    @endforeach
</div>
@endif

<div class="d-flex justify-content-center m-5">
    {{ $subjects->links('pagination::bootstrap-4') }}
</div>
@endsection
