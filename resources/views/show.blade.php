@extends('layouts.layout')

@section('titulo',env('TITLE','') . $curso->nombre)

@section('contenido')

<div class="container">

    <div class="bg-white p-5 shadow rounded col-sm-10 col-lg-6 mx-auto">
        @include('partials.session-status')

        <h1 class="display-8 formTitle">Detalles del Curso</h1>

        <hr>

        <form class="d-none" id="delete-curso" action="{{route('curso.destroy',$curso->id)}}" method="post">
            @csrf
            @method('DELETE')
        </form>

        <div class="btn-group d-flex justify-content-between align-items-center">
            <a class="btn btn-primary" href="{{route('curso.edit',$curso->id)}}">Editar Información</a>
            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-curso').submit()">
                Eliminar Curso</a>
        </div>

        <br>

        <strong class="text-secondary">Creado a las:</strong>
        <p class="text-secondary">{{$curso->created_at->format('d/m/Y h:i:s A')}}</p>

        <strong class="text-secondary">Última modificación a las: </strong>
        <p class="text-secondary">{{$curso->updated_at->format('d/m/Y h:i:s A')}}</p>

        <strong class="text-secondary">Código</strong>
        <p class="text-secondary">{{$curso->codigo}}</p>

        <strong class="text-secondary">Nombre</strong>
        <p class="text-secondary">{{$curso->nombre}}</p>

        <strong class="text-secondary">Créditos</strong>
        <p class="text-secondary">{{$curso->creditos}}</p>

        <strong class="text-secondary">Horas de teoría</strong>
        <p class="text-secondary">{{$curso->horas_teoria}}</p>

        <strong class="text-secondary">Horas de práctica</strong>
        <p class="text-secondary">{{$curso->horas_practica}}</p>

        <strong class="text-secondary">Sumilla</strong>
        <p class="text-secondary">{{$curso->sumilla}}</p>


        <div class="d-grid gap-2">
            @include('partials.volver')
        </div>
    </div>

</div>
@endsection


