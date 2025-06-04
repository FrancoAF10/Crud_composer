<?php
require_once __DIR__.'/../config/Database.php';
require_once __DIR__.'../../entities/Propietario.entidad.php';
/**
 * Esta clase contiene logica para interactuar con la base de datos
 */
class Propietario{
  private $pdo=null;
  public function __construct(){$this->pdo=Database::getConexion();}

  public function create(PropietarioEntidad $entidad):int {
    $sql="INSERT INTO PROPIETARIO(apellidos,nombres) VALUES(?,?)";
    $query=$this->pdo-> prepare($sql);
    $query->execute([
      $entidad->__GET('apellidos'),
      $entidad->__GET('nombres'),
    ]);
    return $this->pdo->lastInsertId();//Obtenemos el último ID
  }

  public function getAll():array{
    $sql="SELECT * FROM PROPIETARIO";
  $query=$this->pdo->prepare($sql);
  $query->execute();
  //FETCH_CLASS(COLECCIÓN DE OBJETOS)
  //FETCH_ASSOC(COLECCIÓN DE ARREGLOS ASOCIATIVOS)
  return $query->fetchAll(PDO::FETCH_CLASS);
  }

  public function getById():array{
    return [];
  }

  public function delete():int{
    return 0;
  }
  /**
   * Actualiza los datos de la mascota
   * @param mixed Arreglo que contiene los campos rewqueridos 
   * @return int Número de filas afectadas por la acualización
   */
  public function update($params =[]):int{
    $sql=" 
    UPDATE MASCOTAS SET
     idPropietario=?,
     tipo=?,nombre=?,
     color=?,
     genero=?
    WHERE idMascota=?";
    $query=$this->pdo->prepare($sql);
    $query->execute([
      $params['idPropietario'],
      $params['tipo'],
      $params['nombre'],
      $params['color'],
      $params['genero'],
      $params['idMascota']
    ]);
    return $query->rowCount();
  }
}
