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
    
    
    $toshow=Array();
    $data = ['success' => true,'usuarios' =>$usuarios,'direcciones'=>$userDomicilio];
    return response()->json($data,200,[]);
    }
}
