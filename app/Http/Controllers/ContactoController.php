<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveContactoRequest;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact', ['contacto'  => new Contacto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveContactoRequest $request)
    {
        Contacto::create($request->all());
        return redirect()
            ->route('curso.index')
            ->with('status','Los comentarios fueron enviados');
    }


}
