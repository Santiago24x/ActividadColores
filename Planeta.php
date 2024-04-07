<!DOCTYPE html>

<html>

<body>
<?php
class Planeta{
    //atributos
    var $nombre;
    var $anillos;
    var $orbita;
    var $satelites;
    
    //constructor
    function Planeta($n, $a, $o, $s){
        $this->nombre = $n;
        $this->anillos = $a;
        $this->orbita = $o;
        $this->satelites = $s;
    }
    
    //métodos
        function obtenerInformacion() {
            return "Nombre: " . $this->nombre . "<br>Anillos: " . $this->anillos . "<br>Orbita: " . $this->orbita . "<br>Satelites: " . $this->satelites;
        }
        function tieneAnillos() {
            if ($this->anillos) {
                return "El planeta " . $this->nombre . " tiene anillos." ;
            } else {
                return "El planeta " . $this->nombre . " no tiene anillos.";
            }
        }

        function calcularTotalSatelites($extraSatelites) {
            return "El planeta " . $this->nombre . " tiene un total de " . ($this->satelites + $extraSatelites) . " satélites.";
        }
    }
    $C_137= new Planeta("c-137",false,"365",1);
    echo $C_137 ->obtenerInformacion() . "<br>";
    echo $C_137 ->tieneAnillos() . "<br>";
    echo $C_137 ->calcularTotalSatelites(1) . "<br>";
    $namek = new Planeta("namek", 3, "800 días", 18);
    echo $namek ->obtenerInformacion() . "<br>";
    echo $namek ->tieneAnillos() . "<br>";
    echo $namek ->calcularTotalSatelites(8) . "<br>";
?>

</body>
</html>