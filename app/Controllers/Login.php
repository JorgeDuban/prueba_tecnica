<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Login_Model;

class Login extends Controller{

    public function index(){
        return view('auth/login');

    }
    public function logueo(){
        $usuario= new Login_Model();
/*
        $validacion= $this->validate([
            'usuario'=>'required|min_length[4]',
            'password'=>'required|min_length[4]'
         ]);
        if(!$validacion){
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }
        $usuario=trim($this->request->getVar('usuario'));
        $password=trim($this->request->getVar('password'));

        $model=model('Login_Model');

        if(!$usuario= $model->getUserBy('usuario', $usuario)){
            return redirect()->back()->with('errors', $this->validator->getErrors());

        }
        if(!password_verify($password, $usuario->password)){
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }
        echo 'validaciones correctas';*/

        $validacion= $this->validate([
           'usuario'=>'required|min_length[4]',
           'password'=>'required|min_length[4]'
        ]);

        if(!$validacion){
            //Con variables de sesion se permite enviar info a raves d elos sitios y vistas
            $session=session();
            $session->setFlashdata('mensaje','Datos incorrectos');
            //Retornar hacia atras enviando valores
            return redirect()->back()->withInput();

        }
        else{
            $usuario=$this->request->getPost('usuario');
            $password=$this->request->getPost('password');
            return $this->response->redirect(site_url('/listar'));

        }

    }
    public function crear_usuario(){
        return view('auth/crear_usuario');

    }
    public function guardar_usuario(){
        $Model_Log= new Login_Model();
        
        //Se crea una validación para verificar los campos antes de enviarlos
        $validacion=$this->validate([

            'usuario'=>'required|min_length[3]',
            'password'=>'required|min_length[4]',

        ]);
        //Si la validación no se llevo a cabo
        if(!$validacion){
            //Con variables de sesion se permite enviar info a raves d elos sitios y vistas
            $session=session();
            $session->setFlashdata('mensaje','Información ingresada incorrectamente');
            //Retornar hacia atras enviando valores
            return redirect()->back()->withInput();
            //return $this->response->redirect(site_url('/listar'));

        }
        //Validamos que halla datos para guardar y los insertamos
            //$password= password_hash("password", PASSWORD_DEFAULT);
            $datos=[
                
                'usuario'=>$this->request->getPost('usuario'),
                'password'=>$this->request->getPost('password'),
            ];
            $Model_Log->protect(false)->insert($datos);
            $session=session();
            $session->setFlashdata('mensaje2','Usuario registrado correctamente');
            //$Model_Log->Crear($datos);
            return $this->response->redirect(site_url('/crear_usuario'));

    }
}