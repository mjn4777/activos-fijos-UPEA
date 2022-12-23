@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<p></p>
    

    <div class="container">
        <div class="row">
            

            <div class="col-md-25">
                <div class="card">
                    <div class="card-header">Activo</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/activo/create') }}" class="btn btn-success btn-sm" title="Add New Activo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar 
                        </a>
                        <a href="{{ url('/admin/mostrarpdf') }}" class="btn btn-warning btn-sm" title="Add New Activo">
                            <i class="" aria-hidden="true"></i> Reporte PDF
                         
                     
                        </a>

                        <form method="GET" action="{{ url('/admin/activo') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>QR</th>
                                        <th>Código</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                     
                                        <th>Grupo</th>
                                        <th>Oficina</th>
                                        
                                        

                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($activo as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{!! DNS2D:: getBarcodeHTML($item->codigo.' - '.$item->descrip.' - '.$item->precio.' - '.$item->grupo->descrip.' - '.$item->oficina->nombre.' - '.$item->estado->descrip, 'QRCODE',3,3) !!}</td>
                                        <td>{{ $item->codigo }}</td>
                                        <td>{{ $item->descrip }}</td>
                                        <td>{{ $item->precio }}</td>
                                      
                                        <td>{{ $item->grupo->descrip }}</td>
                                        <td>{{ $item->oficina->nombre }}</td>
                                      
                                        
                                      
                                        <td>
                                            <a href="{{ url('/admin/activo/' . $item->id) }}" title="View Activo"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Vista</button></a>
                                            <a href="{{ url('/admin/activo/' . $item->id . '/edit') }}" title="Edit Activo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/activo' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete Activo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $activo->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>







@stop
    

