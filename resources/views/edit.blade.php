
@extends('layouts.default')

@section('title', 'Page Title')

@section('content')
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Crear una tarea</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('update', $tarea->id) }}" method="post">
                                @include('partials.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection