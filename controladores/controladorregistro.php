<?php

class controladorRegistro{
    static public function ctrtrarRegistro ()
    {
        if(isset($_POST["registroNombre"]))
        {
            $tabla = "registros";
            $datos = array("nombre"=> $_POST["registroNombre"],
            "telefono"=> $_POST["registroTelefono"],
            "correo"=> $_POST["registroEmail"],
            "password"=> $_POST["registroPassword"]);

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

    
    public function ctrIngreso ()
    {
        if(isset($_POST["ingreseCorreo"]))
        {

            $tabla ="registros";
            $item = "correo";
            $valor =$_POST["ingreseCorreo"];

            $respuesta = ModeloFormulario::mdlMostrarRegistro($tabla,$item, $valor);

            if($respuesta ["correo"]== $_POST["ingreseCorreo"] && $respuesta ["password"] ==$_POST["ingresepassword"] )
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

    public function ctrActualizarRegistro(){
        if(isset($_POST["actualizarNombre"]))
        {
            $tabla = "registros";
            $datos = array("nombre"=> $_POST["actualizarNombre"],
            "telefono"=> $_POST["actualizarTelefono"],
            "correo"=> $_POST["actualizarEmail"],
            "password"=> $_POST["actualizarPassword"]);

            $respuesta = ModeloFormulario::mdloActualizarRegistro($tabla,$datos);

            return $respuesta;
            
        }
    }
}