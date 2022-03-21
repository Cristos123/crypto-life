<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $durations = Duration::paginate(25);
        return view('duration.index', compact('durations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duration.create');
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
            'name' => [
                'required',
                Rule::unique(Duration::class),

                'string',
                'max:255',
            ],
            'duration' => ['required', 'string', 'max:255'],
        ]);
        Duration::create([
            'name' => $request['name'],
            'duration' => $request['duration'],
        ]);

        return redirect()
            ->back()
            ->with('success', 'Duration created  successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function show(Duration $duration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function edit(Duration $duration)
    {
        return view('duration.edit', compact('duration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duration $duration)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'duration' => ['required', 'string', 'max:255'],
        ]);

        $duration->name = $request->name;
        $duration->duration = $request->duration;
        $duration->save();
        return redirect()
            ->back()
            ->with('success', 'Duration   updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duration $duration)
    {
        $duration->delete();
        return redirect()->back();
    }
}
