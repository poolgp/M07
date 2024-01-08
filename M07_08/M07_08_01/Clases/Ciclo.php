<?php

class Ciclo
{
    private $id;
    private $siglas;
    private $nombre;

    public static $numCursos = 0;

    public function __construct($id, $siglas, $nombre){
        $this->id = $id;
        $this->siglas = $siglas;
        $this->nombre = $nombre;
        self::$numCursos++;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getSiglas()
    {
        return $this->siglas;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;

        return $this;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}

?>