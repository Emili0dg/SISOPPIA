<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view ('index');
    }

    public function historia(){
        return view ('historia');
    }

    public function funcionalidades(){
        return view ('funcionalidades');
    }

    public function componenteswindows(){
        return view ('componenteswindows');
    }
    
    public function usuariowindows(){
        return view ('usuariowindows');
    }

    public function seguridadwindows(){
        return view ('seguridadwindows');
    }

    public function compatibilidad(){
        return view ('compatibilidad');
    }

    public function desarrollos(){
        return view ('desarrollos');
    }

}
