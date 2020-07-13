
@extends('main')

@section('title','REGISTRO DE CARROS')

@section('AddScritpHeader')

@endsection

@section('content')


            <div class="modal-header btn-primary">
                <div class="col-md-9">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Conductor</h5>
                </div>
            </div>
            <div class="modal-body">
                <form name="frmRegistroInforme" id="frmRegistroInforme" method="POST" enctype="multipart/form-data"  onKeyPress="return disableEnterKey(event)" onsubmit="return false;">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-group has-float-label">
                                Nombres
                            </label>
                            <input type="text" name="nombres" id="nombres">
                        </div>
                        <div class="col-md-4">
                            <label class="form-group has-float-label">
                                Apellidos
                            </label>
                            <input type="text" name="apellidos" id="apellidos">
                        </div>
                        <div class="col-md-4">
                            <label class="form-group has-float-label">
                                Cedula
                            </label>
                            <input type="number" name="cedula" id="cedula">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-group has-float-label">
                                Placa
                            </label>
                            <select name="placa" id="placa">
                                @foreach ($data['carrosActuales'] as $info)
                                <option value="{!! $info->PLACA !!}">{!! $info->PLACA !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-block" onclick="envioDatosRegistroPermisos()">Registrar el registro <i class="fas fa-save"></i></button>
                        </div>
                    </div>
                </form>
            </div>


   
@endsection

@section('AddScriptFooter')
<script>

    function envioDatosRegistroPermisos(){
        $.ajax({
            type: "POST",
            url: "/carro/registroConductorDb",
            dataType: 'text',
            data: $("#frmRegistroInforme").serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(r){
                var datUsr=r.split("|");
                var valor=datUsr[1];
                var msg=datUsr[2];
                if(valor==0) {
                    alert('Problema' + msg);
                }else{
                    alert('Datos Registrados: ' + msg);
                    window.location.href = "/";
                }
            }
        });
    }
</script>
@endsection