<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDomicilio;
class FrontController extends Controller
{
    public function index(){
    

    $usuarios = user::all();
    $userDomicilio = UserDomicilio::all();
    
    $usuarios=json_decode($usuarios,true);
    $userDomicilio=json_decode($userDomicilio,true);

   
    
    $toshow=Array();
    foreach ($usuarios as $key => $value)
    {
        $_user_id=$usuarios[$key]['id'];

        $toshow[$_user_id]['id']= $usuarios[$key]['id'];
        $toshow[$_user_id]['name']= $usuarios[$key]['name'];
        $toshow[$_user_id]['email']= $usuarios[$key]['email'];
        $toshow[$_user_id]['email_verified_at']= $usuarios[$key]['email_verified_at'];
        $toshow[$_user_id]['created_at']= $usuarios[$key]['created_at'];
        $toshow[$_user_id]['updated_at']= $usuarios[$key]['updated_at'];
        $toshow[$_user_id]['fecha_nacimiento']= $usuarios[$key]['fecha_nacimiento'];
        $toshow[$_user_id]['edad']=0;
        if($usuarios[$key]['fecha_nacimiento'])
        {
            $toshow[$_user_id]['edad']=$this->calculaedad($usuarios[$key]['fecha_nacimiento']);
        }
    }


    
    foreach ($userDomicilio as $key => $value)
    {
        $_user_id=$userDomicilio[$key]['user_id'];


        $toshow[$_user_id]['domicilio']= $userDomicilio[$key]['domicilio'];
        $toshow[$_user_id]['numero_exterior']= $userDomicilio[$key]['numero_exterior'];
        $toshow[$_user_id]['colonia']= $userDomicilio[$key]['colonia'];
        $toshow[$_user_id]['cp']= $userDomicilio[$key]['cp'];
        $toshow[$_user_id]['ciudad']= $userDomicilio[$key]['ciudad'];

        
    }
    
  

    $data = ['success' => true,'usuarios' =>$toshow];
    return response()->json($data,200,[]);
    }


    function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
      }
}
