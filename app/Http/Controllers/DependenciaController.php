<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use Illuminate\Http\Request;

/**
 * Class DependenciaController
 * @package App\Http\Controllers
 */
class DependenciaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencias = Dependencia::all();
        return view('dependencia.index',['dependencias'=>$dependencias]);

        // $dependencias = Dependencia::paginate();
        //     ->with('i', (request()->input('page', 1) - 1) * $dependencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dependencia.create');
        //  $dependencia = new Dependencia();
        //  return view('dependencia.create', compact('dependencia'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campo=[
            'nameDp' => 'required|string|max:30'
         ];
         $this->validate($request,$campo);

         $dependencia = request() ->except('_token');

         Dependencia::insert($dependencia);
         return redirect()->route('dependencias.index');

        // $request->validate([
        //     'nameDp' => 'required|max:'
        // ]);
        // $dependencia = new Dependencia();
        // $dependencia->nameDp = $request->nameDp;
        // $dependencia->save();

        // request()->validate(Dependencia::$rules);
        //  $dependencia = Dependencia::create($request);
        // return redirect()->route('dependencias.index')
        //     ->with('success', 'Dependencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dependencia = Dependencia::find($id);

        // return view('dependencia.show', compact('dependencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $dependencia = Dependencia::find($id);

        // return view('dependencia.edit', compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dependencia $dependencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dependencia $dependencia)
    {
        // request()->validate(Dependencia::$rules);

        // $dependencia->update($request->all());

        // return redirect()->route('dependencias.index')
        //     ->with('success', 'Dependencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        // $dependencia = Dependencia::find($id)->delete();

        // return redirect()->route('dependencias.index')
        //     ->with('success', 'Dependencia deleted successfully');
    }
}
