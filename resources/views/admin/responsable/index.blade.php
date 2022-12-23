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
                    <div class="card-header">Responsable</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/responsable/create') }}" class="btn btn-success btn-sm" title="Add New Responsable">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuevo registro
                        </a>

                        <form method="GET" action="{{ url('/admin/responsable') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Nombre</th>
                                        <th>CI</th>
                                        <th></th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($responsable as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->ci }}</td>
                                        <td>
                                        
                                        <td>
                                        

                                            <a href="{{ url('/admin/responsable/' . $item->id) }}" title="View Responsable"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Vista</button></a>
                                            <a href="{{ url('/admin/responsable/' . $item->id . '/edit') }}" title="Edit Responsable"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/responsable' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Responsable" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $responsable->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
    
