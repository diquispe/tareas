
@extends('layouts.default')

@section('title', 'Page Title')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-right"><a href="{{ route('nuevo') }}" class="btn btn-danger">Nueva Tarea</a></div>
                            <h4>Listado de Tareas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tarea</th>
                                        <th>Completado</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tareas as $tarea)
                                    <tr>
                                        <th scope="row">{{ $tarea->id }}</th>
                                        <td>{{ $tarea->tarea }}</td>
                                        <td>
                                            @if($tarea->completed ==1)
                                                Completado
                                            @else
                                                <a href="{{ route('completado', $tarea->id) }}" class="btn btn-secondary">Completar</a>
                                            @endif</td>
                                        <td>
                                            @can('destroy', $tarea)
                                            <a href="{{ route('delete', $tarea->id) }}" class="btn btn-danger">X</a>
                                            @endcan
                                            @can('edit', $tarea)
                                            <a href="{{ route('edit', $tarea->id) }}" class="btn btn-primary">Edit</a>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection