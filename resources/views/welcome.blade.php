@extends('layouts.layout')

@section('titulo',env('TITLE','') . 'Nuestros Cursos')

@section('contenido')

<div class="container col-12 col-lg-6 mx-auto">
    @include('partials.session-status')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-8 mb-0 title">Nuestros Cursos</h1>
        <a class="btn btn-primary" href="{{route('curso.create')}}">Registrar Nuevo Curso</a>
    </div>

    <ul class="list-group">
        @if ($cursos)
        @foreach ($cursos as $curso)
        <li class="bg-white list-group-item border-0 mb-3 shadow-sm rounded">
            <a class="text-secondary text-decoration-none d-grid" href="{{route('curso.show',$curso->id)}}">
                <strong class="formTitle">
                    {{$curso->codigo . ' | ' . $curso->nombre}}
                </strong>
                <small>
                    Última modificación:
                    {{$curso->updated_at->format('d/m/Y h:i:s A')}}
                </small>
            </a>
        </li>
        @endforeach
        {{-- Solucionamos el error del metodo links() que muestra
        grandes botones agregando Paginator::useBootstrap() en la
        funcion boot() de la clase AppServiceProvider.php--}}
        {{$cursos->links()}}
        @else
        <li class="bg-white list-group-item border-0 mb-3 shadow-sm rounded">
            No se han cargado ningun curso en nuestro sistema</li>
        @endif
    </ul>

</div>
@endsection


