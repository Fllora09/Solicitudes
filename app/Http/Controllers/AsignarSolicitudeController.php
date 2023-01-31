<?php

namespace App\Http\Controllers;

use App\Models\AsignarSolicitude;
use Illuminate\Http\Request;

/**
 * Class AsignarSolicitudeController
 * @package App\Http\Controllers
 */
class AsignarSolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignarSolicitudes = AsignarSolicitude::paginate();

        return view('asignar-solicitude.index', compact('asignarSolicitudes'))
            ->with('i', (request()->input('page', 1) - 1) * $asignarSolicitudes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignarSolicitude = new AsignarSolicitude();
        return view('asignar-solicitude.create', compact('asignarSolicitude'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AsignarSolicitude::$rules);

        $asignarSolicitude = AsignarSolicitude::create($request->all());

        return redirect()->route('asignar-solicitudes.index')
            ->with('success', 'AsignarSolicitude created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignarSolicitude = AsignarSolicitude::find($id);

        return view('asignar-solicitude.show', compact('asignarSolicitude'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignarSolicitude = AsignarSolicitude::find($id);

        return view('asignar-solicitude.edit', compact('asignarSolicitude'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AsignarSolicitude $asignarSolicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignarSolicitude $asignarSolicitude)
    {
        request()->validate(AsignarSolicitude::$rules);

        $asignarSolicitude->update($request->all());

        return redirect()->route('asignar-solicitudes.index')
            ->with('success', 'AsignarSolicitude updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignarSolicitude = AsignarSolicitude::find($id)->delete();

        return redirect()->route('asignar-solicitudes.index')
            ->with('success', 'AsignarSolicitude deleted successfully');
    }
}
