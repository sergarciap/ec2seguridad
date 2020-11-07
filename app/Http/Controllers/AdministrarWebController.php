<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;

class AdministrarWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * _credentialsUser     : ec2user
     * _credentialsPassword : ec2userpw123 
     */
    private $_credentialsPassword;

    public function __construct()
    {
        $this->_credentialsPassword = base64_encode("ec2userpw123");
    }
    
    public function index(){
        return view('template', ['viewData' => []]);
    }

    public function login(Request $request){
        if($request->method() == "POST"){

            $requestUser = $request->input('_credentialsUser');
            $requestPw   = $request->input('_credentialsPassword');
        
            if(!empty($requestUser) && 
               !empty($requestPw)   &&
               $this->_credentialsPassword == base64_encode($requestPw)){
                session(['boLogin' => true]);
                return redirect('my-admin');
            }

            return view('template', ['viewData' => ["msjError" => "Estimado/a, por favor verifique los datos ingresados."]]);
        }else{
            return view('template', ['viewData' => []]);
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('accounts/login');
    }

    public function myAdmin(Request $request){
        $boLogin = Session::get('boLogin');
    
        if($boLogin != true){
            return redirect('accounts/login');
        }

        return view('myadmin', ['viewData' => []]);
    }

    // $value = $request->session()->get('key');
}
