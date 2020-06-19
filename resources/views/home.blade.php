

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
                <div class="card-header">
                 <button type="submit" class="btn btn-outline-danger"><a href="{{route('index')}}">+Show Student</a></button> 
                </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    ID: {{ Auth::user()->id }} <span class="caret"></span>
                   <br>
                   Name: {{ Auth::user()->firstName }} <span class="caret"></span>
                   <br>
                   Email: {{ Auth::user()->email }} <span class="caret"></span>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
