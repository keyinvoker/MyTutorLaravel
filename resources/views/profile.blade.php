@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header">Y O U R &nbsp; P R O F I L E</div>
                <img class="img-profile" src="{{ asset('storage/tutors/' . Auth::user()->id . '.jpg') }}" alt="profile" onerror="this.onerror=null; this.src=`../storage/tutors/default.jpg`">
                </center>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input value="{{ Auth::user()->name }}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input value="{{ Auth::user()->email }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input value="{{ Auth::user()->phone }}" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Mailing Address') }}</label>

                            <div class="col-md-6">
                                <input value="{{ Auth::user()->address }}" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="state" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <select id="state" type="text" class="form-control form-select @error('state') is-invalid @enderror" name="state" required>
                                    <!-- //TODO: remove hard coding 'selected' attribute-->
                                    @if( Auth::user()->state == "Johor" )
                                    <option selected value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Kedah" )
                                    <option value="Johor">Johor</option>
                                    <option selected value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Kelantan" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option selected value="Kelantan">Kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Malacca" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option selected value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Negeri Sembilan" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option selected value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Pahang" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option selected value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Penang" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option selected value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Perak" )
                                    <option selected value="Perak">Perak</option>
                                    @elseif( Auth::user()->state == "Perlis" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option selected value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Sabah" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option selected value="Sabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Sarawak" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option selected value="Sarawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Selangor" )
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option selected value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    @elseif( Auth::user()->state == "Terengganu" )>
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">kelantan</option>
                                    <option value="Malacca">Malacca</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Pabah">Sabah</option>
                                    <option value="Parawak">Sarawak</option>
                                    <option value="Pelangor">Selangor</option>
                                    <option selected value="Terengganu">Terengganu</option>
                                    @endif
                                </select>
                                
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea rows="5" placeholder="Tell a little bit about yourself" id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}">{{ Auth::user()->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
