<?php

Function cuentaLetras($palabra,$vocales){

	$palabra = strtolower($palabra);
    $vocales;
    
        if($vocales === "a"){

            $mensaje = "La palabra \"" . $palabra . "\" tiene " . substr_count($palabra,$vocales) . " \"$vocales\".<br/>";
            echo $mensaje;

        }
        elseif($vocales === "e"){

            $mensaje = "La palabra \"" . $palabra . "\" tiene " . substr_count($palabra,$vocales) . " \"$vocales\".<br/>";
            echo $mensaje;

	    }
        elseif($vocales === "i"){

            $mensaje = "La palabra \"" . $palabra . "\" tiene " . substr_count($palabra,$vocales) . " \"$vocales\".<br/>";
            echo $mensaje;

	    }
        elseif($vocales === "o"){

            $mensaje = "La palabra \"" . $palabra . "\" tiene " . substr_count($palabra,$vocales) . " \"$vocales\".<br/>";
            echo $mensaje;

        }
        elseif($vocales === "u"){

            $mensaje = "La palabra \"" . $palabra . "\" tiene " . substr_count($palabra,$vocales) . " \"$vocales\".<br/>";
            echo $mensaje;

	    }elseif($vocales !== "a" || "e" || "i" || "o" || "u"){

            echo "No ha elegido una vocal.";

        }      

}	

echo cuentaLetras("Upgrade Hub","u");

?>