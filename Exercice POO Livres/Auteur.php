<?php

class Auteur
{
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }

    public function addLivres(Livre $livre)
    {
        $this->livres[] = $livre;
    }

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

    public function afficherBibliographie()
    {
        $result = "<h3>Livres de $this</h3>";
        foreach ($this->livres as $livre) {
            $result .= $livre . "<br>";
        }

        return $result;
    }
}

