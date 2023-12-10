@extends('adminlte::page')

@section('title', 'Academy Buss')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.prices.create')}}">Agregar precio </a>
   
    <h1>Lista de Precios</h1>
@stop

@section('content')


        @if (session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prices as $price )
                            <tr>
                                <td>
                                    {{$price->id}}
                                </td>

                                <td>
                                    {{$price->name}}
                                </td>

                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.prices.edit', $price)}}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.prices.destroy', $price)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        
                                        <button class="btn btn-danger btn-sm" type="">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop

