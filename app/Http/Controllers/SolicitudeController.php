<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use Illuminate\Http\Request;
use App\Models\Dependencia;
use App\Models\User;
use App\Notifications\NuevaSolicitudCreada;

/**
 * Class SolicitudeController
 * @package App\Http\Controllers
 */
class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitude::all();
        return view('solicitude.index', compact('solicitudes'));
            // ->with('i', (request()->input('page', 1) - 1) * $solicitudes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dependencias = Dependencia::all();
        return view('solicitude.create',compact('dependencias', /* 'solicitude' */));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'titulo' => 'required|string|min:5|max:30',
            'detailSoli' => 'required|string|min:5|max:100',
            // 'dependencia' => 'required',
        ];

        $this->validate($request,$campos);

        $solicitude = new Solicitude();
        $solicitude->titulo = $request->titulo;
        $solicitude->detailSoli = $request->detailSoli;
        $solicitude->user = $request->user()->id;
        $solicitude->dependencia = $request->dependencia;
        $solicitude->save();


        // $users= $request->user()->name;
        //$users=\Auth::user()->name;
       // $users->id = auth()->id();
         // $users = auth()->user();
       // $users = User::role('agent')->orderBy('name')->pluck('name', 'id');
        // $user = User::find($id);
        // $users->id = auth()->id();
        // request()->validate(Solicitude::$rules);

         // $solicitude = notify(new NuevaSolicitudCreada());

         return redirect()->route('notificacion')
         //return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitud creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.show', compact('solicitude'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.edit', compact('solicitude'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Solicitude $solicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitude $solicitude)
    {
        request()->validate(Solicitude::$rules);

        $solicitude->update($request->all());

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitude updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitude = Solicitude::find($id)->delete();

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitude deleted successfully');
    }
}
