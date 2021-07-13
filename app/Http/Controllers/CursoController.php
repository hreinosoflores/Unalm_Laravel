<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCursoRequest;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::latest('updated_at')->paginate(4);

        return view('welcome', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('save', [
        'curso'  => new Curso,
        'headTitle' => 'Registrando Nuevo Curso',
        'formTitle' => 'Nuevo Curso',
        'btn'       => 'Registrar']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCursoRequest $request)
    {
        Curso::create($request->validated());
        return redirect()
            ->route('curso.index')
            ->with('status','El curso fue registrado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('show', ['curso' => $curso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $curso =Curso::findOrFail($id);
        return view('save', [
        'curso'  => $curso,
        'headTitle' => 'Editando Curso ',
        'formTitle' => 'Editando Curso ',
        'btn'       => 'Guardar Cambios']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCursoRequest $request, $id)
    {
        Curso::findOrFail($id)->update($request->validated());
        return redirect()
            ->route('curso.show', $id)
            ->with('status','El curso fue modificado con éxito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect()
            ->route('curso.index')
            ->with('status','El curso fue eliminado con éxito.');

    }
}
