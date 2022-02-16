<?php

namespace App\Http\Controllers;

use App\Models\registroServicio;

use Illuminate\Http\Request;

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


        // $registroServicio = registroServicio::all();
        // $registroServicioIncompleto = registroServicio::where('ordenServicioEstado', '=', 'Incompleto')->get();
        // $registroServicioCompleto = registroServicio::where('ordenServicioEstado', '=', 'Completo')->get();
        // return view('home', compact('registroServicio', 'registroServicioIncompleto', 'registroServicioCompleto'));

        $registroServicio = registroServicio::all();

        return view('home', compact('registroServicio'));
    }
}
