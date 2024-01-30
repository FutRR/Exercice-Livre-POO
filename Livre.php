<?php

class Livre
{
    // Declaring the properties
    private string $titre;
    private int $nbPage;
    private string $sortie;
    private float $prix;
    //Declaring the autor with the Author class as type
    private Auteur $auteur;

    //Initializing properties with a constructor
    public function __construct(string $titre, int $nbPage, string $sortie, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->sortie = $sortie;
        $this->prix = $prix;
        //Initializing author twice : once to a string and once to an array
        $this->auteur = $auteur;
        $this->auteur->addLivres($this);
    }

    //Getters & Setters//

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPage(): int
    {
        return $this->nbPage;
    }

    public function setNbPage(int $nbPage)
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    public function getSortie(): string
    {
        return $this->sortie;
    }

    public function setSortie(string $sortie)
    {
        $this->sortie = $sortie;

        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    // Displaying the properties as intended with a toString function 
    public function __toString()
    {
        return "$this->titre ($this->sortie) : $this->nbPage pages / $this->prix €";
    }
}