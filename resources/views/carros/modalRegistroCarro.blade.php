
@extends('main')

@section('title','REGISTRO DE CARROS')

@section('AddScritpHeader')

@endsection

@section('content')


            <div class="modal-header btn-primary">
                <div class="col-md-9">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de autos</h5>
                </div>
            </div>
            <div class="modal-body">
                <form name="frmRegistroInforme" id="frmRegistroInforme" method="POST" enctype="multipart/form-data"  onKeyPress="return disableEnterKey(event)" onsubmit="return false;">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-group has-float-label">
                                Placa del auto
                            </label>
                            <input type="text" name="placa" id="placa">
                        </div>
                        <div class="col-md-4">
                            <label class="form-group has-float-label">
                                Marca del auto
                            </label>
                            <input type="text" name="marca" id="marca">
                        </div>
                        <div class="col-md-4">
                            <label class="form-group has-float-label">
                                Tipo del auto
                            </label>
                            <input type="text" name="tipo" id="tipo">
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
            url: "/carro/registroCarroDb",
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