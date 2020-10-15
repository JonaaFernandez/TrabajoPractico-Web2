<?php

class PropertiesTypesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_propiedades;charset=utf8', 'root', '');
    }
         
     function GetAll(){
          $sentencia = $this->db->prepare("SELECT * FROM tipos_propiedades order by id");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
   
      function Insert($nombre,$description){
      
          $sentencia = $this->db->prepare("INSERT INTO tipos_propiedades(nombre, descripcion) VALUES(?,?)");
          $sentencia->execute([$nombre,$description]);
      return;

      }


      function Delete($type_id){
        $id=$type_id;
        echo $id . "pppppppppppppppppppppppppppppppppppppppppppp";
        $sentencia = $this->db->prepare("DELETE FROM tipos_propiedades WHERE id=?");
        $sentencia->execute(array($type_id));
    }


      
    function getType($id){
        $sentencia = $this->db->prepare("SELECT * FROM tipos_propiedades WHERE id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
       
   }


   function updateType($id,$nombre,$descripcion){
       $sentencia = $this->db->prepare("UPDATE tipos_propiedades SET nombre=?, descripcion=? WHERE id=?");
       $sentencia->execute([$nombre, $descripcion, $id]);
return;
   }
   
}

?>