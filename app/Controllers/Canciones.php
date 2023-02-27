<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cancion;

class Canciones extends Controller
{
    public function __construct(){
        //Creamos un constructor
        $this->Cancion= model("Cancion");

    }

    public function listar()
    {
        //A traves del constructor llamamos a la funcion en el modelo para traer los datos
        $datos['Listado_Canciones'] = $this->Cancion->Listado_Canciones();
        //Formamos una cabecera y un pie de pagina genral para las vista y las llamamos de ser necesario (optimizamos codigo)
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/pie_pagina');

        return view('canciones/listar', $datos);
    }
    public function reporte()
    {
        //A traves del constructor llamamos a la funcion en el modelo para traer los datos
        $datos['Generar_reporte'] = $this->Cancion->Generar_reporte();
        //Formamos una cabecera y un pie de pagina genral para las vista y las llamamos de ser necesario (optimizamos codigo)
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/pie_pagina');

        return view('canciones/reportes', $datos);
    }
    public function reporte2()
    {
        //A traves del constructor llamamos a la funcion en el modelo para traer los datos
        $datos['Generar_reporte'] = $this->Cancion->Generar_reporte();
        //Formamos una cabecera y un pie de pagina genral para las vista y las llamamos de ser necesario (optimizamos codigo)
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/pie_pagina');

        return view('canciones/reportes2', $datos);
    }

    public function crear(){

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/pie_pagina');

        return view('canciones/crear', $datos);
    }

    public function guardar(){

        $cancion= new Cancion();
        //Se crea una validación para verificar los campos antes de enviarlos
        $validacion=$this->validate([

            'nombre'=>'required|min_length[3]',
            'duracion'=>'required|min_length[4]',
            'fecha'=>'required'
        ]);
        //Si la validación no se llevo a cabo
        if(!$validacion){
            //Con variables de sesion se permite enviar info a raves d elos sitios y vistas
            $session=session();
            $session->setFlashdata('mensaje','Revisa la información ingresada');
            //Retornar hacia atras enviando valores
            return redirect()->back()->withInput();
            
        }
        //Validamos que halla datos para guardar y los insertamos

            $datos=[
                'id_artista'=>$this->request->getPost('id_artista'),
                'nombre'=>$this->request->getPost('nombre'),
                'duracion'=>$this->request->getPost('duracion'),
                'fecha'=>$this->request->getPost('fecha')
            ];
            $cancion->insert($datos);
            return $this->response->redirect(site_url('/listar'));
        
    }
    
    public function borrar($id_cancion=null){

        $cancion= new Cancion();
        //Borrarmos datos por el ID 
        $datosCancion=$cancion->where('id_cancion', $id_cancion)->first();

        $cancion->where('id_cancion', $id_cancion)->delete($id_cancion);
        return $this->response->redirect(site_url('/listar'));

    }

    public function editar($id_cancion=null){

        //print_r($id_cancion);
        //Nos basamos en el borrar y editamos los datos segun el ID

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/pie_pagina');

        $cancion= new Cancion();
        $datos['cancion']=$cancion->where('id_cancion',$id_cancion)->first();

        return view('canciones/editar', $datos);
    }

    public function actualizar(){

        $cancion= new Cancion();
        $datos=[
            'id_artista'=>$this->request->getPost('id_artista'),
            'nombre'=>$this->request->getPost('nombre'),
            'duracion'=>$this->request->getPost('duracion'),
            'fecha'=>$this->request->getPost('fecha')
        ];
        $id_cancion=$this->request->getPost('id_cancion');
        //Antes de actualizar validamos los datos
        $validacion=$this->validate([

            'nombre'=>'required|min_length[3]',
            'duracion'=>'required|min_length[4]',
            'fecha'=>'required'
        ]);
        if(!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Información ingresada incorrectamente');
            return redirect()->back()->withInput();


        }
        //Actulizamos en base al id y enviamos datos
        $cancion->update($id_cancion, $datos);
        
        return $this->response->redirect(site_url('/listar'));
       
    }



    
    
}
