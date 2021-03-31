@extends('layouts.master')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Hello, {{ auth()->user()->name }}!</h1>
                    <p class="lead">Welcome to STUNNERYPP.</p>
                    <hr class="my-4">
                    <p>You can create your own songs to your hearts content.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Create Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
