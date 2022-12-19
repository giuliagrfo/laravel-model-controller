@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movies</h1>
    <div class="row">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <h4>{{$movie}}</h4>

            </div>
        </div>
        @empty
        <p></p>
        @endforelse
    </div>
</div>

@endsection