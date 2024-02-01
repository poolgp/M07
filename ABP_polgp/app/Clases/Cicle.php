<?php

class Cicle
{
    private $id;
    private $sigles;
    private $nom;

    public function __construct($id, $sigles, $nom)
    {
        $this->id = $id;
        $this->sigles = $sigles;
        $this->nom = $nom;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getSigles()
    {
        return $this->sigles;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setSigles($sigles)
    {
        $this->sigles = $sigles;
        return $this;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
}

?>