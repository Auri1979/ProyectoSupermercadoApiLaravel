<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Use App\Models\UserLogin;

class AuthController extends Controller
{
    public function login(Request $request) { 

        $credentials = $request->validate([ 
            'email' => 'required','email', 
            'password' => 'required',
        ]);

        // Verificar que el email existe y que la contraseña es correcta
        if (Auth::attempt($credentials)) {

            $usuariologueado = Auth::user();

            $token =$usuariologueado->createToken('TokenUsuario')->plainTextToken;
            
            return [
                'mensaje' => 'usuario logueado',
                'usuario'=> $usuariologueado,
                'token' =>$token,
            ];

        } 
        else{
            return response(['Error'=>'unauthorized'],401);}
    }

    public function register(Request $request){
        $credentials = $request->validate([ 
            'name' => 'required',
            'email' => 'required','email', 
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        //encriptar password
        $credentials['password'] = bcrypt($credentials['password']);
        //crear usuario nuevo
        $usuario = UserLogin::create($credentials);
        //generar el token
        $token =$usuario->createToken('TokenUsuario')->plainTextToken;
        //devolver respuesta
        return [
            'mensaje' => 'usuario registrado',
            'usuario' => $usuario, 
            'token' =>$token,
        ];
    }

    public function logout(){
        $usuarioLogeado = Auth::user();

        $usuarioLogeado -> tokens()->delete();

        return ['mensaje'=> 'Usuario deslogeado'];
    }
}