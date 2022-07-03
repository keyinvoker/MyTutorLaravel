@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/subject-details.css')}}">

@section('content')
<div class="container">
    <div class="card">
        
        <form action="{{ route('subject.delete',$selectedSubject->subject_id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <center>
            <div class="card-header">
                S U B J E C T &nbsp; D E T A I L S
            </div>
            </center>

            <div class="card">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/subjects/' . $selectedSubject->subject_id . '.jpg') }}" alt="Subject image" class="details-img">
                    
    
                    <div class="card-body">
                        <center>
                        <div class="wrapper">
                            <p class="card-text">📔<b> Subject </b><br>{{ $selectedSubject->subject_name }}</p>
                            <p class="card-text">👨‍🏫<b> Sessions </b><br>{{ $selectedSubject->subject_sessions }}</p>
                            <p class="card-text">💵<b> Price </b><br>RM {{ $selectedSubject->subject_price }}</p>
                            <p class="card-text">⭐<b> Rating </b><br>{{ $selectedSubject->subject_rating }}</p>
                            <p class="card-text">📜<b> Description </b><br>{{ $selectedSubject->subject_description }}</p>
                        </div>
                        </center>
                    </div>
                </div>
                <center>
                <input type="submit" value="Delete" class="btn btn-danger">
                <a href="{{ route('subject.editForm', $selectedSubject->subject_id) }}" class="btn btn-primary">Edit</a>
                </center> 
            </div>

        </form>

    </div>
</div>
@endsection