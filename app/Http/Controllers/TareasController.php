<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function index() {

        $tareas = Tarea::all();
        return view('tareas', compact('tareas'));
    }


    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarea = new Tarea;
        $tarea->tarea = $request->tarea;
        $tarea->completed = $request->estado;
        $tarea->save();

        return redirect(route('tareas'));
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
        $tarea = Tarea::find($id);

        //$this->authorize('edit');

        return view('edit')->with('tarea', $tarea);
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



        $tarea = Tarea::find($id);
        $this->authorize('update', $tarea);
        $tarea->tarea = $request->tarea;
        $tarea->completed = $request->estado;

        $tarea->save();

        return redirect(route('tareas'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id);
        $this->authorize('destroy', $tarea);
        $tarea->delete();
        return redirect()->back();
    }

    public function completado($id) {
        $tarea = Tarea::find($id);
        $tarea->completed = 1;
        $tarea->save();
        return redirect(route('tareas'));
    }



}
