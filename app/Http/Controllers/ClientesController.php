<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ClientesController extends Controller
{
        //constructor para evitar acceso sin login
        public function __construct()
        {
            $this -> middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Personas.clientes');

        $clientes = Http::get('http://localhost:3000/api/act_clientes');
        $clientesArray = $clientes -> json();
        return view('Personas.clientes',compact('clientesArray'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $response = Http::post('http://localhost:3000/api/ins_clientes', [
            'VNOMBRES' => $request -> input("NomCliente"),
            'VAPELLIDOS' => $request -> input("ApllCliente"),
            'VDNI' => $request -> input("DniCliente"),
            'VNUMTEL' => $request -> input("TelCliente"),
            'VCORREO' => $request -> input("CorrCliente")

        ]);

        $clientes = Http::get('http://localhost:3000/api/act_clientes');
        $clientesArray = $clientes -> json();
        return view('Personas.clientes',compact('clientesArray'));


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
