<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;

class CategoriasController extends Controller
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

        $categorias = Http::get('http://localhost:3000/listar_categorias');
        $categoriasArray = $categorias -> json();
        return view('Inventario.categorias',compact('categoriasArray'));

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
   /*  public function store(Request $request)
    {

        $response = Http::post('http://localhost:3000/insert_categorias', [
            'VNOMBRE' => $request -> input("NomCategoria")
            // 'role' => $request -> get(''),
        ]);
    }
 */
     public function store(Request $request)
    {
        $response = Http::post('http://localhost:3000/insert_categorias', [
            'VNOMBRE' => $request -> input("NomCategoria")
        ]);

        $categorias = Http::get('http://localhost:3000/listar_categorias');
        $categoriasArray = $categorias -> json();
        return view('Inventario.categorias',compact('categoriasArray'));

        // return new Response($response,Response::HTTP_OK , view('Inventario.categorias'));

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
