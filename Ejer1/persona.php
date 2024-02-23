<?php
class Persona
{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . "<br>";
    }
}

// Crear instancias de la clase Persona
$persona1 = new Persona("Jose", 25);
$persona2 = new Persona("Cristo", 30);
$persona3 = new Persona("Airam", 22);

// Crear array asociativo con objetos de la clase Persona
$arrayPersonas = array(
    "Jose" => $persona1,
    "Cristo" => $persona2,
    "Airam" => $persona3
);

// Mostrar información de las personas en el array
foreach ($arrayPersonas as $nombre => $persona) {
    echo "Informacion: ";
    $persona->mostrarInformacion();
}
