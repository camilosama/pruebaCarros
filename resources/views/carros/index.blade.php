@extends('main')

@section('title','MENU INICIAL')

@section('AddScritpHeader')

@endsection

@section('content')
 <div id="responseModal"></div>

     <div class="row">
        <div class="col-md-6 text-right">
            <a href="{{ url('/carros/modalRegistro') }}">
                <button type="button" class="btn btn-primary">Registrar Nuevo Carro</button>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('/carros/modalRegistroConductor') }}">
                <button type="button" class="btn btn-info">Registrar Nuevo Usuario</button>
            </a>
        </div>
    </div>
    <br>
    <div class="modal-header btn-primary">
        <div class="col-md-9">
            <h5 class="modal-title" id="exampleModalLabel">autos Con conductores</h5>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table id="example" class="table">
        <thead style="display: none">
        <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data['carrosActuales'] as $info)
            <tr>
                <td> {!! $info->PLACA !!}</td>
                <td> {!! $info->MARCA !!}</td>
                <td> {!! $info->NOMBRES !!}</td>
                <td> {!! $info->NOMBRES !!}</td>
                <td> {!! $info->NOMBRES !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
        <div class="col-md-1"></div>
    </div>
   
@endsection

@section('AddScriptFooter')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>
@endsection