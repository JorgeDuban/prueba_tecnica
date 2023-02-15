<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cancion;
class Home extends BaseController
{

    public function index()
    {
        return view('canciones/index');
    }
    
}
