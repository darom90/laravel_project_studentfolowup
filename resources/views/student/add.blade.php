{{-- 
<form action="{{route('student.store')}}" method="POST" >
    @csrf
    <div class="form-group">
        <label for="">Firstname</label>
        <input type="text" name="firstName" id="firstName" placeholder="firstname">
    </div>
    <div class="form-group">
        <label for="">lastname</label>
        <input type="text" name="lastName" id="lastName" placeholder="lastname">
    </div>
    <div class="form-group">
        <label for="">Class</label>
        <input type="text" name="class" id="class" placeholder="class">
    </div>
    <div class="form-group">
        <label for="">Decription</label>
        <input type="text" name="decription" id="decription" placeholder="decription">
    </div>
    <div class="form-group">
        <label for="">Picture</label>
        <input type="text" name="picture" id="picture" placeholder="decription">
    </div>
    <div class="form-group">
        <label for="">Activefolowup</label>
        <input type="text" name="activefolowup" id="activefolowup" placeholder="decription">
    </div>
    <button type="submit">Add</button>
</form> --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
<form action="{{route('student.store')}}" method="POST" >
    @csrf
    <div class="form-group">
        <label for="">Firstname</label>
        <input type="text" name="firstName" id="firstName" placeholder="firstname">
    </div>
    <div class="form-group">
        <label for="">lastname</label>
        <input type="text" name="lastName" id="lastName" placeholder="lastname">
    </div>
    <div class="form-group">
        <label for="">Class</label>
        <input type="text" name="class" id="class" placeholder="class">
    </div>
    <div class="form-group">
        <label for="">Decription</label>
        <input type="text" name="decription" id="decription" placeholder="decription">
    </div>
    <div class="form-group">
        <label for="">Picture</label>
        <input type="text" name="picture" id="picture" placeholder="decription">
    </div>
    <div class="form-group">
        <label for="">Activefolowup</label>
        <input type="text" name="activefolowup" id="activefolowup" placeholder="decription">
    </div>
    <button type="submit">Add</button>
</form>

</div>

</body>
</html> --}}



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
                <div class="card-header">{{ __('Add Student') }}</div>

                <div class="card-body">
                    <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="lastName" class="form-control @error('lastName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

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
                                <input id="lastName" type="lastName" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName">

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
                                <input id="class" type="class" class="form-control @error('class') is-invalid @enderror" name="class" required autocomplete="class">

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
                                <input id="decription" type="decription" class="form-control @error('decription') is-invalid @enderror" name="decription" required autocomplete="decription">

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
                                <input type="file" id="myFile" name="picture">
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
                                <input id="activefolowup" type="activefolowup" class="form-control @error('activefolowup') is-invalid @enderror" name="activefolowup" required autocomplete="decription">

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
                                    Add
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
