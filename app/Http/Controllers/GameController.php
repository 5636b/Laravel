<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $jogos = Game::all();
        // dd($jogos);
        return view('jogos.index', ['jogos' => $jogos]);
    }
}
