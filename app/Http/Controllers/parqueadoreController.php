<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class parqueadoreController extends Controller
{
	// VENTANA INICIAL MUESTRA LOS DATOS YA RGISTRADOS
    public function index(){
        $carrosActuales = DB::table('CARROS as CR')
            ->select('CR.PLACA','CR.MARCA','CO.NOMBRES','CO.APELLIDOS','CO.CEDULA')
            ->join("CONDUCTORES as CO","CO.PLACA","CR.PLACA")
            ->orderBy('CO.CEDULA')
            ->get();
            //dd($carrosActuales);
        $data=array(
            "carrosActuales"=>$carrosActuales
        );
        return((String)\View::make("carros.index", array("data" => $data)));
    }
    // RETORNA VISTA DE LA PAGINA PARA REGISTRO
    public function frmRegistroCarro(){
    	 return view('carros.modalRegistroCarro');
    }
    // INSERT DE NUEVO CARRO
    public function registroCarroDb(Request $request){
    	$placa=$request->input("placa");
    	$marca=$request->input("marca");
    	$tipo=$request->input("tipo");

    	try {
            DB::table('CARROS')->insert([
                ['PLACA' => $placa, 'MARCA' => $marca, 'TIPO' =>  $tipo]
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return '|0|Problema al insertar los datos por favor verifique estos datos. [carros] <br>'.$e;
        }
        //FINALIZA REGISTRO CORRECTO DE USUARIO
        DB::commit();
        return '|1|ATENCIÓN...!. La información ha sido registrada correctamente.';
    }
    // FRM REGISTRO CODNUCTOR
    public function frmRegistroConductor(){


    	// LISTA DE ACTUALES CARROS
    	$carrosActuales = DB::table('CARROS')
            ->select('PLACA')
            ->orderBy('PLACA')
            ->get();
            //dd($carrosActuales);
        $data=array(
            "carrosActuales"=>$carrosActuales
        );
        return((String)\View::make("carros.modalRegistroConductores", array("data" => $data)));
    }
    // EGISTAR CONDUCTORES ENTABLA 
    public function registroConductorDb(Request $request){
    	$nombres=$request->input("nombres");
    	$apellidos=$request->input("apellidos");
    	$cedula=$request->input("cedula");
    	$placa=$request->input("placa");

    	try {
            DB::table('CONDUCTORES')->insert([
                ['NOMBRES' => $nombres, 'APELLIDOS' => $apellidos, 'PLACA' =>  $placa, 'CEDULA' =>$cedula]
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return '|0|Problema al insertar los datos por favor verifique estos datos. [CONDUCTORES] <br>'.$e;
        }
        //FINALIZA REGISTRO CORRECTO DE USUARIO
        DB::commit();
        return '|1|ATENCIÓN...!. La información ha sido registrada correctamente.';
    }
    public function javaScript(){
    	return view('carros.javaScript');
    }



}
