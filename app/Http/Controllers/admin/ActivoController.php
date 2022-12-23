<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Activo;
use Illuminate\Http\Request;



use App\Models\Grupo;
use App\Models\Estado;
use App\Models\Oficina;

use PDF;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $activo = Activo::where('codigo', 'LIKE', "%$keyword%")
                ->orWhere('descrip', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('fechaadq', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('grupo_id', 'LIKE', "%$keyword%")
                ->orWhere('estado_id', 'LIKE', "%$keyword%")
                ->orWhere('oficina_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $activo = Activo::latest()->paginate($perPage);
        }

        return view('admin.activo.index', compact('activo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {



        
        $grupos=Grupo::All();
        $estados=Estado::All();
        $oficinas=Oficina::All();


        return view('admin.activo.create',compact('grupos','estados','oficinas'));







        //return view('admin.activo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        //Activo::create($requestData);

        if($request->hasFile('foto')){
            $requestData['foto']=$request->file('foto')->store('uploads','public');
            }
            Activo::create($requestData);
            return redirect('admin/activo')->with('flash_message', 'Activo added!');






        //return redirect('admin/activo')->with('flash_message', 'Activo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $activo = Activo::findOrFail($id);

        return view('admin.activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $grupos=Grupo::All();
        $estados=Estado::All();
        $oficinas=Oficina::All();

        
        $activo = Activo::findOrFail($id);

        return view('admin.activo.edit', compact('activo','grupos','estados','oficinas'));

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $activo = Activo::findOrFail($id);
        $activo->update($requestData);

        return redirect('admin/activo')->with('flash_message', 'Activo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Activo::destroy($id);

        return redirect('admin/activo')->with('flash_message', 'Activo deleted!');
    }


    public function MostrarActivoPdf()
        {
        //crea el PDF
       
        $activos=Activo::All();

        $view=\View::make('vistapdf',compact('activos'))->render();
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('hola.pdf'); //Archivo de descarga
        
}
}
