@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center text-white my-5">Movies</h1>
    <div class="row">
        @forelse($movies as $movie)
        <div class="col-4 g-4">
            <div class="card border-0">
                <img class="img-fluid" src="{{$movie->image}}" alt="">
                <div class="card-body bg-dark text-white">
                    <h4>{{$movie->title}}</h4>
                    <span>Original Title: {{$movie->original_title}}</span>
                    <span>Nationality: {{$movie->nationality}}</span>
                    <span>Date: {{$movie->date}}</span>
                    <span>Vote: {{$movie->vote}}</span>
                </div>
            </div>
        </div>
        @empty
        <p></p>
        @endforelse
    </div>
</div>

@endsection