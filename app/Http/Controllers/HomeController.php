<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\registroHorometroCincuenta;
use App\Models\registroHorometroCien;
use App\Models\registroHorometroCientoCincuenta;
use App\Models\registroHorometroQuinientos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $horometroHorometroCincuenta = registroHorometroCincuenta::all();
        $horometroHorometroCien = registroHorometroCien::all();
        $horometroHorometroCientoCincuenta = registroHorometroCientoCincuenta::all();
        $horometroHorometroQuinientos = registroHorometroQuinientos::all();

        return view('home', compact('horometroHorometroCincuenta', 'horometroHorometroCien', 'horometroHorometroCientoCincuenta', 'horometroHorometroQuinientos'));
    }
}
