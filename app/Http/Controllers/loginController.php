<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees;

class LoginController extends Controller
{   
    public function iniciarSesion(Request $request){
        $usuario = $request->post('email');
        $password = $request->post('password');

        //select correo, password from jefe where correo = $usuario AND password = $password
        $employee = Employees::select('email','password')->where('email','=',$usuario)->where('password', '=' ,$password)->get();

        if(count($employee) != 0){
            foreach($employee as $value){
                session(['id_employee' => $value->id]); //1
                session(['name' => $value->name]); //juan
                return view('template');
            }
        }else{
            return back()->with('error', 'Credenciales Incorrectas');
        }
    }

    public function cerrarSesion(Request $request){
        //destruimos (olvidamos) la informacion de las sesiones
        $request->session()->forget(['id_employee','name']);
        return redirect('/Login');
    }
}