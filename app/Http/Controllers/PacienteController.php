<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PersonaFormRequest;
use DB;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*if($request){
            $query=trim($request->get('searchText'));
            /*$persona=DB::table('personas')
            //->where('nombres', 'LIKE', '%'.$query.'%')
            ->where('tipo_persona', '=', 'Paciente')
            ->get();
            //->orderBy('id_persona','desc');*/
            return view('paciente.index');
        //}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new persona;
        $persona->nombres = $request->get('nombres');
        $persona->apellidos = $request->get('apellidos');
        $persona->cedula = $request->get('cedula');
        $persona->sexo = $request->get('sexo');
        $persona->correo = $request->get('correo');
        $persona->telefono = $request->get('telefono');
        $persona->tipo_persona = $request->get('tipo_persona');
        $persona->save();

        return view('paciente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("paciente.show",["persona"=>Persona::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("paciente.edit",["persona"=>Persona::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaFormRequest $request, $id)
    {
        $persona=Persona::findOrFail($id);
        $persona->nombres=$request->get('nombres');
        $persona->apellidos=$request->get('apellidos');
        $persona->cedula=$request->get('cedula');
        $persona->sexo=$request->get('sexo');
        $persona->telefono=$request->get('telefono');
        $persona->correo=$request->get('correo');
        $persona->tipo_persona = $request->get('tipo_persona');
        $persona->update();
        return Redirect::to('paciente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
