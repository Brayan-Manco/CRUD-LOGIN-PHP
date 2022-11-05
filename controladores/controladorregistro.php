<?php

class controladorRegistro{
    static public function ctrtrarRegistro ()
    {
        if(isset($_POST["Nombre"]))
        {
            $tabla = "registros";
            $datos = array("nombre"=> $_POST["RNombre"],
            "telefono"=> $_POST["RTelefono"],
            "correo"=> $_POST["RCorreo"],
            "password"=> $_POST["RPassword"]);

            $respuesta = ModeloFormulario::mdloregistro($tabla,$datos);

            return $respuesta;
            
        }
    }

    static public function ctrselecionarRegistro()
    {
        $tabla = "registros";

        $respuesta = ModeloFormulario::mdlMostrarRegistro($tabla,null, null);
        return $respuesta;
    }

    static public function ctrEditarRegistro(){
        if(isset($_POST["ENombre"]))
        {
            $tabla = "registros";
            $datos = array("nombre"=> $_POST["ENombre"],
            "telefono"=> $_POST["ETelefono"],
            "correo"=> $_POST["Ecorreo"],
            "password"=> $_POST["EPassword"]);

            $respuesta = ModeloFormulario::mdloEditarRegistro($tabla,$datos);

            return $respuesta;
            
        }
    }
    
    static public function ctrIngreso ()
    {
        if(isset($_POST["ICorreo"]))
        {

            $tabla ="registros";
            $item = "correo";
            $valor =$_POST["Correo"];

            $respuesta = ModeloFormulario::mdlMostrarRegistro($tabla,$item, $valor);

            if($respuesta ["correo"]== $_POST["ICorreo"] && $respuesta ["password"] ==$_POST["IPassword"] )
            {

                $_SESSION ["validar_ingreso"]= "ok";

                echo '<script>
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }

                            window.location="index.php?paginas=inicio";
                            </script>';
            }
            else 
            {
                echo '<script>

                        if (window.history.replaceState) {

                            window.history.replaceState(null, null, window.location.href);

                        }
                        </script>';

                        echo '<div class="alert alert-danger"> El usuario no existe </div>';
            }
        }
    }
    static public function ctrBorrarRegistro(){
        $tabla ="registros";
        $item = 'id';
        $respuesta = ModeloFormulario::mdlBorrarRegistro($tabla, $item);
	}
}