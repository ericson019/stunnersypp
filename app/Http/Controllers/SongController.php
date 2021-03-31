<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Requests\SongValidationRequest;

class SongController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('songs.index')->with(['songs' => Song::isActive()->createdByUser()->latest()->get()]);
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(SongValidationRequest $request)
    {
        $data = $request->validated();
        $slug = strtolower(str_replace(' ', '-',$data['title']));
        auth()->user()->songs()->create([
            'title' => $data['title'],
            'author' => $data['author'],
            'lyrics' => $data['lyrics'],
            'slug' => $slug
        ]);
        return redirect()->route('songs.')->with(['success' => true, 'message' => 'Saved']);
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Song $song, SongValidationRequest $request)
    {
        $data = $request->validated();
        $slug = strtolower(str_replace(' ', '-',$data['title']));
        $song->update([
            'title' => $data['title'],
            'author' => $data['author'],
            'lyrics' => $data['lyrics'],
            'slug' => $slug
        ]);
        return redirect()->route('songs.')->with(['success' => true, 'message' => 'Updated']);
    }

    public function destroy(Song $song)
    {
        $song->update(['is_deleted'=> 1]);
        return back()->with(['success' => true, 'message' => 'Deleted']);
    }

}
