@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid mb-2">
        <h1 class="mt-4">Edit Song</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Songs</li>
            <li class="breadcrumb-item active">Edit Song</li>
        </ol>

        <form action="{{ route('songs.update',$song->id) }}" method="POST">
            @csrf @method('PUT')
            @include('songs.forms', ['button' => 'Update'])
        </form>
    </div>
</main>
@endsection
