@extends('layouts.layout')

@section('titulo',env('TITLE','') . 'Contáctenos')

@section('contenido')

<div class="container">

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.error-list')
            <form class="bg-white shadow-sm rounded py-3 px-4" method="POST" action="{{route('contacto.store')}}">
                @csrf
                <h3 class="display-8 formTitle">Escríbanos para mayor información</h3>
                <hr>
                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm @error('nombres') is-invalid @else border border-2 @enderror"
                        type="text" placeholder="Nombres..." id="nombres" name="nombres"
                        value="{{old('nombres',$contacto->nombres)}}">
                        <br>
                </div>
                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm @error('apellidos') is-invalid @else border border-2 @enderror"
                        type="text" placeholder="Apellidos..." id="apellidos" name="apellidos"
                        value="{{old('apellidos',$contacto->apellidos)}}">
                        <br>
                </div>
                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm @error('email') is-invalid @else border border-2 @enderror"
                        type="text" placeholder="E-mail..." id="email" name="email"
                        value="{{old('email',$contacto->email)}}">
                        <br>
                </div>
                <div class="form-group">
                    <input
                        class="form-control bg-light shadow-sm @error('telefono') is-invalid @else border border-2 @enderror"
                        type="text" placeholder="Teléfono..." id="telefono" name="telefono"
                        value="{{old('telefono',$contacto->telefono)}}">
                        <br>
                </div>
                <div class="form-group">
                    <textarea
                        class="form-control bg-light shadow-sm @error('comentarios') is-invalid @else border border-2 @enderror"
                        placeholder="Comentarios..." id="comentarios" name="comentarios"
                        id="comentarios" rows="10">{{old('comentarios',$contacto->comentarios)}}</textarea>
                        <br>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary">Enviar Comentarios</button>
                    @include('partials.volver')
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
