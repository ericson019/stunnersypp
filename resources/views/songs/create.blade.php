@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid mb-2">
        <h1 class="mt-4">Add Song</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Songs</li>
            <li class="breadcrumb-item active">Add Song</li>
        </ol>

            <form action="{{ route('songs.store') }}" method="POST">
                @csrf
                @include('songs.forms', ['button' => 'Save', 'song' => ''])
            </form>
</main>
@endsection
