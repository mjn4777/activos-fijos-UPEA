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
                    <div class="card-header">Activo {{ $activo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/activo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atrás</button></a>
                        <a href="{{ url('/admin/activo/' . $activo->id . '/edit') }}" title="Edit Activo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('admin/activo' . '/' . $activo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Activo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $activo->id }}</td>
                                    </tr>
                                    <tr><th> Código </th><td> {{ $activo->codigo }} </td></tr>
                                    <tr><th> Descripción </th><td> {{ $activo->descrip }} </td></tr>
                                    <tr><th> Precio </th><td> {{ $activo->precio }} </td></tr>                                   
                                    <tr><th> Fecha de adquisición </th><td> {{ $activo->fechaadq }} </td></tr>
                                    
                                    



                                    <tr><th> Grupo </th><td> {{ $activo->grupo->descrip }} </td></tr>
                                    <tr><th> Oficina </th><td> {{ $activo->oficina->nombre }} </td></tr>
                                    <tr><th> Estado </th><td> {{ $activo->estado->descrip }} </td></tr>
                                    <tr><th> Foto </th>
                                    <td> <img src="{{ asset('storage').'/'.$activo->foto }}" alt=""> </td>
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
    

