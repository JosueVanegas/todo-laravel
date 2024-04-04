@extends('layouts.main')
<div>
    @section('title', 'Home')
    @section('content')
        <p>hola aqui irá el contenido dinamico</p>
        <h1>lista usuarios</h1>
        <div class="container">
            <ul>
                @forelse ($users as $user)
                    <li>
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->email }}</p>
                    </li>
                @empty
                    <li>no hay usuarios</li>
                @endforelse
            </ul>
        </div>
    @endsection
</div>
