<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Models\ContactosModel;
use App\Models\EmpresasModel;

use App\Http\Requests\ContactosRequest;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ContactosModel=ContactosModel::latest('id_contacto')->paginate(20);

        return view('Contactos.index',compact('ContactosModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ContactosModel=new ContactosModel;

        return view('Contactos.create', compact('ContactosModel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactosRequest $request)
    {
        $GuardarDatos=(new ContactosModel)->fill($request->validated());
        
        if ($GuardarDatos->save()) 
        {
            return back()->with('SuccessMessage','mensaje');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EmpresasModel $id)
    {
        /*EL ID HACE REFERENCIA AL IDENTIFICADOR DE LA EMPRESA*/

        $ContactosModel=new ContactosModel;
        $ListadoEmpresas=EmpresasModel::all();

        $DatosContactosTabla=ContactosModel::latest('id_contacto')
        ->ControlEmpresas($id['id_empresa'])
        ->paginate(20);

        return view('Contactos.create',['EmpresasModel'=>$id],
                                        compact('ContactosModel',
                                                'ListadoEmpresas',
                                                'DatosContactosTabla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $ContactosModel=ContactosModel::findorFail($id);
        $ListadoEmpresas=EmpresasModel::all();

        return view('Contactos.edit',compact('ContactosModel','ListadoEmpresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactosRequest $request, ContactosModel $id)
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
    public function destroy(ContactosModel $id)
    {
        
        $id->delete();

        return back();

    }
}
