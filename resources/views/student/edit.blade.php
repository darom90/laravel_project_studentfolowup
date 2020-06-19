{{-- 
<form action="{{route('student.update',$student->id)}}" method="POST" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Firstname</label>
        <input type="text" name="firstName" id="firstName" placeholder="firstname" value="{{$student->firstName}}">
    </div>
    <div class="form-group">
        <label for="">lastname</label>
        <input type="text" name="lastName" id="lastName" placeholder="lastname" value="{{$student->lastName}}">
    </div>
    <div class="form-group">
        <label for="">Class</label>
        <input type="text" name="class" id="class" placeholder="class" value="{{$student->class}}">
    </div>
    <div class="form-group">
        <label for="">Decription</label>
        <input type="text" name="decription" id="decription" placeholder="decription" value="{{$student->decription}}">
    </div>
    <div class="form-group">
        <label for="">Picture</label>
        <input type="text" name="picture" id="picture" placeholder="picture" value="{{$student->picture}}">
    </div>
    <div class="form-group">
        <label for="">Activefolowup</label>
        <input type="text" name="activefolowup" id="activefolowup" placeholder="activefolowup" value="{{$student->activefolowup}}">
    </div>
    <button type="submit">Edit</button>
</form> --}}


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Student') }}</div>

                <div class="card-body">
                    <form action="{{route('student.update',$student->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="lastName" class="form-control @error('lastName') is-invalid @enderror" name="firstName" value="{{$student->firstName}}" required autocomplete="firstName" autofocus>

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="lastName" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{$student->lastName}}" required autocomplete="lastName">

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <input id="class" type="class" class="form-control @error('class') is-invalid @enderror" name="class" value="{{$student->class}}" required autocomplete="class">

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="decription" class="col-md-4 col-form-label text-md-right">{{ __('Decription') }}</label>

                            <div class="col-md-6">
                                <input id="decription" type="decription" class="form-control @error('decription') is-invalid @enderror" value="{{$student->decription}}" name="decription" required autocomplete="decription">

                                @error('decription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                            <div class="col-md-6">
                                <input id="picture" type="picture" class="form-control @error('picture') is-invalid @enderror" name="picture" value="{{$student->picture}}" required autocomplete="decription">

                                @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="activefolowup" class="col-md-4 col-form-label text-md-right">{{ __('Activefolowup') }}</label>

                            <div class="col-md-6">
                                <input id="activefolowup" type="activefolowup" class="form-control @error('activefolowup') is-invalid @enderror" name="activefolowup" value="{{$student->activefolowup}}" required autocomplete="decription">

                                @error('activefolowup')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
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
