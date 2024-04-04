@extends('layouts.main')
@section('title', 'notes')
@section('content')
    <h1>here goes the notes data</h1>


    @forelse ($notes as $note)
        <div class="container">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                </label>
            </div>
            <h2>{{ $note->title }}</h2>
            <p>{{ $note->description }}</p>

        </div>
    @empty


        <div class="container">
            <p>No Notes Yet!</p>
        </div>
    @endforelse ()


@endsection
