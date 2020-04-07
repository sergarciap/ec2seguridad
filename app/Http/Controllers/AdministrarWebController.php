<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdministrarWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
	* Descripción  Inicio o home de creativerse (Utiliza include para el render)
	* @author	   Creativerse Team <creativerse.ltda@gmail.com>
	* @param       no aplica
	* @return      index view
	*/
    public function index(){
        #Include para traer configuración.
        include_once('../_configurations/main.php');
        #Set de datos para la vista.
        $viewData['main_config']  = $main_config;
        $viewData['main_content'] = 'index.main_content';
        #Retornar template+index
        return view('template', ['viewData' => $viewData]);
    }

}
