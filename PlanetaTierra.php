<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planeta Tierra</title>
</head>
<body>
    <h1>Información del Planeta Tierra</h1>

    <?php
    
    
    // Definición de la clase PlanetaTierra
    class PlanetaTierra {
        // Atributos
        public $nombre;
        public $radio;
        public $masa;
        public $edad;

        // Constructor
        public function __construct($nombre, $radio, $masa, $edad) {
            $this->nombre = $nombre;
            $this->radio = $radio;
            $this->masa = $masa;
            $this->edad = $edad;
        }

        // Métodos
        public function aumentarEdad($cantidad) {
            $this->edad += $cantidad;
            echo "La edad de $this->nombre ha aumentado en $cantidad años.<br>";
        }

        public function mostrarInfo() {
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Radio: " . $this->radio . " km<br>";
            echo "Masa: " . $this->masa . " kg<br>";
            echo "Edad: " . $this->edad . " años<br>";
        }

        public function explotar() {
            echo "¡Cuidado! $this->nombre va explotar.<br>";
        }
    }

    // Creacion de objetos
    $tierra = new PlanetaTierra("Tierra", 6371, 5.972e24, 4500);
    $tierra2 = new PlanetaTierra("Tierra 2.0", 3390, 6.39e23, 3000);
    

    // Mostrar la información del planeta
    echo "<h2>Planeta Tierra </h2><br>";
    $tierra->mostrarInfo();
    echo "<h2>Planeta Tierra 2.0</h2><br>";
	$tierra2->mostrarInfo();
    ?>
    
    
    
</body>
</html>
