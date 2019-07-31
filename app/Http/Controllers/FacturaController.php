<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Factura;
use App\DetalleFactura;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\FacturaFormRequest;
use DB;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes=DB::table('personas')->get();
        $examenes=DB::table('exam')->get();
        return view('factura.index',['pacientes'=>$pacientes, 'examenes'=>$examenes]);
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
    public function store(FacturaFormRequest $request)
    {
        //try{

            DB::beginTransaction();
                $factura = new Factura;
                $factura->id_paciente=$request->get('id_paciente');
                $factura->impuesto='12';
                $factura->estado='A';
                $factura->save();
                $id_examen = $request->get('id_examen');
                $cantidad = $request->get('cantidad');
                $cont = 0;
                while ($cont < count($id_examen)) {
                    $detalle = new DetalleFactura();
                    $detalle->id_factura= $factura->id;
                    $detalle->id_examen= $id_examen[$cont];
                    $detalle->cantidad= $cantidad[$cont];
                    $detalle->save();
                    $cont++;
                }
            DB::commit();
        catch(\Exception $e)
        {
            DB::rollback();
        }
        return Redirect::to('examenes');
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
