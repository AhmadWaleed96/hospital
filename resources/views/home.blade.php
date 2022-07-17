@extends('users.admin.layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('dist/img/1.jpeg')}}" alt="background-image">
            </div>
        </div>
    </div>
@endsection
