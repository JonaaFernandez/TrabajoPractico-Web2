<?php

class PropertiesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_propiedades;charset=utf8', 'root', '');
    }
         
     function GetAllProp(){
          $sentencia = $this->db->prepare("SELECT * FROM propiedades order by tipo");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
   

      function GetByType($type){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE tipo=? order by valor");
        $sentencia->execute([$type]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
      function InsertProp($type,$name,$adress,$value,$description,$date){
      
          $sentencia = $this->db->prepare("INSERT INTO propiedades(tipo, nombre, direccion, descripcion, valor, fecha) VALUES(?,?,?,?,?,?)");
          $sentencia->execute([$type,$name,$adress,$value,$description,$date]);
      return;

      }
     
      function getProp($id){
        $sentencia = $this->db->prepare("SELECT * FROM propiedades WHERE id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }
     
      function DeleteProp($prop_id){
          $sentencia = $this->db->prepare("DELETE FROM propiedades WHERE id=?");
          $sentencia->execute(array($prop_id));
      }



    
    function updateProp($id,$type,$name,$adress,$value,$description,$date){
          $sentencia = $this->db->prepare("UPDATE propiedades SET tipo=?, nombre=?, direccion=?,  valor=?, descripcion=?, fecha=?  WHERE id=? ");
          $sentencia->execute([$type,$name,$adress,$value,$description,$date,$id]);
      return;
    }
     
      
}

?>