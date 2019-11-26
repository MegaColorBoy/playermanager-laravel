<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;
use DB;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $players = Players::all();
        $players = DB::select('Call GetAllPlayers()');
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'FullName' => 'required',
            'UserName' => 'required'
        ]);

        $player = new Players([
            'FullName' => $request->get('FullName'),
            'UserName' => $request->get('UserName')
        ]);

        $player->save();
        return redirect('/players')->with('success', 'Player added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Players::find($id);
        return view('players.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'FullName' => 'required',
            'UserName' => 'required'
        ]);

        $player = Players::find($id);
        $player->FullName = $request->get('FullName');
        $player->UserName = $request->get('UserName');
        $player->save();

        return redirect('/players')->with('success', 'Player updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Players::find($id);
        $player->delete();

        return redirect('/players')->with('success', 'Player deleted');
    }
}
