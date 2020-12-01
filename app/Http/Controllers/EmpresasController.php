<?php

namespace App\Http\Controllers;

use App\Models\EmpresasModel;
use App\Http\Requests\EmpresasRequest;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EmpresasModel=EmpresasModel::latest('id_empresa')->paginate(20);

        return view('Empresas.index',compact('EmpresasModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $EmpresasModel=new EmpresasModel;

        return view('Empresas.create', compact('EmpresasModel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresasRequest $request)
    {
        $GuardarDatos=(new EmpresasModel)->fill($request->validated());
        $GuardarDatos->save();

        return redirect()->route('index')->with('SuccessMessage','Solicitud creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EmpresasModel $id)
    {
       
        return view('Empresas.show', ['EmpresasModel'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $EmpresasModel=EmpresasModel::findorFail($id);

        return view('Empresas.edit',compact('EmpresasModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresasRequest $request, EmpresasModel $id)
    {
        $id->update( $request->validated() );

        return redirect()->route('index')->with('SuccessMessage','Datos Actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmpresasModel $id)
    {   $aleat_number = rand(0,999999);

        $id->razon_social=$id->razon_social.' '.$aleat_number;
        $id->rfc=$id->rfc.' '.$aleat_number;
        $id->nombre_comercial=$id->nombre_comercial.' '.$aleat_number;
        $id->save();
        $id->delete();

        return back()->with('SuccessMessage','Empresa eliminada correctamente');
    }
}
