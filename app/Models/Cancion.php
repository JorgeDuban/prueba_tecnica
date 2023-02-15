<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cancion extends Model{
    protected $table      = 'canciones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_cancion';
    protected $allwedFields=['id_artista','nombre','duracion','fecha'];

    public function Listado_Canciones(){
        //Una consulta para traer los datos de la tabla para luego ingresarlos a la tabla creda con HTML
        $datos=$this->db->query("SELECT c.id_cancion, c.nombre AS 'Nombre_Cancion', a.nombre AS 'Nombre_Artista', c.duracion, c.fecha FROM canciones c
        INNER JOIN artistas a ON c.id_artista=a.id_artista");
        if($datos->getNumRows() >0){
            return $datos->getResult();
        }
        else {
            return false;
        }
    }
    public function Listado_Canciones2(){
        //Una consulta para traer los datos de la tabla para luego ingresarlos a la tabla creda con HTML
        $datos=$this->db->query("SELECT  a.nombre AS 'Nombre_Artista', c.duracion, c.fecha FROM canciones c
        INNER JOIN artistas a ON c.id_artista=a.id_artista");
        if($datos->getNumRows() >0){
            return $datos->getResult();
        }
        else {
            return false;
        }
    }
    public function Crear($datos){
        return $this->insert($datos);
    }
    public function Generar_reporte(){
        //Una consulta para traer los datos de la tabla para luego ingresarlos a la tabla creda con HTML
        $datos=$this->db->query("SELECT c.id_cancion, c.nombre AS 'Nombre_Cancion', a.nombre AS 'Nombre_Artista', c.duracion, c.fecha FROM canciones c
        INNER JOIN artistas a ON c.id_artista=a.id_artista");
        if($datos->getNumRows() >0){
            return $datos->getResult();
        }
        else {
            return false;
        }
    }
}