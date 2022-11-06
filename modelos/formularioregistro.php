<?php
require_once "conexion.php";

class ModeloFormulario{
    static public function mdloregistro($tabla, $datos){
        $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,telefono, correo, password) 
        VALUES (:nombre,:telefono,:correo,:password)");
    
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        //$stmt->close();
        $stmt =null; 
    }

    static public function mdloEditarRegistro($tabla, $datos,$id){

        $stmt= Conexion::conectar()->prepare("UPDATE $tabla SET nombre=?, telefono=? , correo=?, password WHERE 'id' =$id");
        
        

        if ($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        //$stmt->close();
        $stmt =null;
        
    }
    static public function mdlMostrarRegistro ($tabla, $item, $valor) 
    {       

        /*$stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
    
            return $stmt ->fetchAll();
            //$stmt->close();
            $stmt = null;*/

        if ($item== null && $valor ==null){

            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();
    
            return $stmt ->fetchAll();
        }
        else 
        {
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt ->fetchAll();
        }
        
        //$stmt->close();
        $stmt = null;


        /*if ($item == null && $valor == null) {
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();
    
            return $stmt ->fetchAll();
        }
        else 
        {
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item =:$item");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt ->fetchAll();
        }
        //$stmt->close();
        $stmt = null;*/
    }
    static public function mdlBorrarRegistro($item, $tabla){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla  WHERE $item = id");

        $stmt->execute();

        $stmt= null;
	}
}