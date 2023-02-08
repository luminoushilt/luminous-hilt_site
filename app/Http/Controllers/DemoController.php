<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demos = Demo::whereBelongsTo(Auth::user())->latest('updated_at')->paginate(20);
        return view('demo.index')->with('demos', $demos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required|max:120',
            'demo_link' => 'required',
            'thumbnail' => 'required | image',
            'caption' => 'required',
        ]);

        $file = $request->hasFile('thumbnail');
        if($file) {
            $newFile = $request->file('thumbnail');
            $file_path = $newFile->store('thumbnails');
        }

        Auth::user()->demos()->create([
            'uuid'=> Str::uuid(),
            'title' => $request->title,
            'caption' => $request->caption,
            'thumbnail_path' => $file_path,
            'demo_link' => $request->demo_link,
        ]);

        return to_route('demo.index')->with('success', 'The demo was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Demo $demo)
    {
        if (!$demo->user->is(Auth::user())) {
            return abort(403);
        }

        return view('demo.show')->with('demo', $demo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Demo $demo)
    {
        if (!$demo->user->is(Auth::user())) {
            return abort(403);
        }

        return view('demo.edit')->with('demo', $demo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demo $demo)
    {
        if (!$demo->user->is(Auth::user())) {
            return abort(403);
        }

        $request->validate([
            'title' => 'required|max:120',
            'demo_link' => 'required',
            'thumbnail' => 'required | image',
            'caption' => 'required',
        ]);

        $file = $request->hasFile('thumbnail');
        if($file) {
            $newFile = $request->file('thumbnail');
            $file_path = $newFile->store('thumbnails');
        }

        $demo->update([
            'title' => $request->title,
            'caption' => $request->caption,
            'thumbnail_path' => $file_path,
            'demo_link' => $request->demo_link,
        ]);

        return to_route('notes.show', $demo)->with('success', 'Demo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demo $demo)
    {
        if (!$demo->user->is(Auth::user())) {
            return abort(403);
        }

        $demo->delete();

        return to_route('demo.index')->with('success', 'Note moved to trash');
    }
}
