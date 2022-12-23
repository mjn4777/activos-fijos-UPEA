@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <p></p>

    <div class="container">
        <div class="row">
       
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Oficina {{ $oficina->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/oficina') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atrás</button></a>
                        <a href="{{ url('/admin/oficina/' . $oficina->id . '/edit') }}" title="Edit Oficina"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/oficina' . '/' . $oficina->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Oficina" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $oficina->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Código </th><td> {{ $oficina->codigo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th><td> {{ $oficina->nombre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Piso </th><td> {{ $oficina->piso }} </td>
                                    </tr>
                                    <tr>
                                        <th> Resposanble </th><td> {{ $oficina->responsable->nombre }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>











@stop
    

