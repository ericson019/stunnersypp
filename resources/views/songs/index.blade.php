@extends('layouts.master')

@section('content')

<main>
    <div class="container-fluid mb-2">
        <h1 class="mt-4">Songs</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Songs</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Song List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="song-list" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Lyrics</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $songs as $song)
                                <tr>
                                    <td>{{ $song->title }}</td>
                                    <td>{{ $song->author }}</td>
                                    <td>{{ $song->lyrics }}</td>
                                    <td>{{ $song->created_at->format('F d, Y') }}</td>

                                    <td class="d-flex align-items-center justify-content-between">
                                        <form action="{{ route("songs.destroy",$song->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('songs.edit',$song->id) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        No available song at the moment!
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#song-list').DataTable();
    });
</script>
@endsection
