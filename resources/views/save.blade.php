@extends('layouts.layout')

@section('titulo',env('TITLE','') . $headTitle)

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow-sm rounded py-3 px-4" method="POST" action="
                @isset($curso->id)
                    {{route('curso.update',$curso->id)}}
                @else
                    {{route('curso.store')}}
                @endisset">

                @csrf

                @isset($curso->id)
                @method('PATCH')
                @endisset

                <h1 class="display-8 formTitle">{{$formTitle}}</h1>
                <hr>

                <div class="form-group">
                    <label for="codigo">Código del curso:</label>
                    <input
                        class="form-control bg-light shadow-sm @error('codigo') is-invalid @else border border-2 @enderror"
                        type="text" id="codigo" name="codigo" value="{{old('codigo',$curso->codigo)}}">
                    @include('partials.error-messages',['label'=>'codigo'])
                </div>


                <div class="form-group">
                    <label for="nombre">Nombre del curso:</label>
                    <input
                        class="form-control bg-light shadow-sm @error('nombre') is-invalid @else border border-2 @enderror"
                        type="text" id="nombre" name="nombre" value="{{old('nombre',$curso->nombre)}}">
                    @include('partials.error-messages',['label'=>'nombre'])
                </div>


                <div class="form-group">
                    <label for="creditos">Cantidad de créditos:</label>
                    <input
                        class="form-control bg-light shadow-sm @error('creditos') is-invalid @else border border-2 @enderror"
                        type="text" id="creditos" name="creditos" value="{{old('creditos',$curso->creditos)}}">
                    @include('partials.error-messages',['label'=>'creditos'])
                </div>


                <div class="form-group">
                    <label for="horas_teoria">Horas de teoría:</label>
                    <input
                        class="form-control bg-light shadow-sm @error('horas_teoria') is-invalid @else border border-2 @enderror"
                        type="text" id="horas_teoria" name="horas_teoria"
                        value="{{old('horas_teoria',$curso->horas_teoria)}}">
                    @include('partials.error-messages',['label'=>'horas_teoria'])
                </div>



                <div class="form-group">
                    <label for="horas_practica">Horas de práctica:</label>
                    <input
                        class="form-control bg-light shadow-sm @error('horas_practica') is-invalid @else border border-2 @enderror"
                        type="text" id="horas_practica" name="horas_practica"
                        value="{{old('horas_practica',$curso->horas_practica)}}">
                    @include('partials.error-messages',['label'=>'horas_practica'])
                </div>



                <div class="form-group">
                    <label for="sumilla">Sumilla:</label>
                    <textarea
                        class="form-control bg-light shadow-sm @error('sumilla') is-invalid @else border border-2 @enderror"
                        name="sumilla" id="sumilla" rows="10">{{old('sumilla' ,$curso->sumilla)}}</textarea>
                    @include('partials.error-messages',['label'=>'sumilla'])
                </div>


                <div class="d-grid gap-2">
                    <button class="btn btn-primary">{{$btn}}</button>
                    @include('partials.volver')
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
