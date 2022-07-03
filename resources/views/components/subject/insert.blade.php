@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/subject-details.css')}}">

@section('content')
<div class="container">
    <div class="card">
        
        <form action="{{ route('subject.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <center>
            <div class="card-header">
                I N S E R T &nbsp; S U B J E C T
            </div>
            </center>

            <div class="card">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('storage/subjects/default.jpg') }}" alt="Subject image" class="details-img">
                    
    
                    <div class="card-body">
                        <div class="">                            
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="sessions" class="col-md-4 col-form-label text-md-end">{{ __('Sessions') }}</label>
                                <div class="col-md-6">
                                    <input id="sessions" type="text" class="form-control @error('sessions') is-invalid @enderror" name="sessions" value="" required>

                                    @error('sessions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="" required>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="rating" class="col-md-4 col-form-label text-md-end">{{ __('Rating') }}</label>
                                <div class="col-md-6">
                                    <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="" required>

                                    @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                                <div class="col-md-6">
                                    <textarea rows="5" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <center>
                <input type="submit" value="Insert" class="btn btn-warning">
                </center> 
            </div>

        </form>

    </div>
</div>
@endsection