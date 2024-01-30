<?php

class Auteur
{
    // Declaring the properties
    private string $nom;
    private string $prenom;
    //Declaring a book array to match each book to its author
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        //Setting the array
        $this->livres = [];
    }

    // Getters & Setters //
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

    //Adding book objects to the array (See Livre constructor)
    public function addLivres(Livre $livre)
    {
        $this->livres[] = $livre;
    }

    //Displaying the author and their books with a foreach loop that goes to the previously mentionned array
    public function afficherBibliographie()
    {
        $result = "<h3>Livres de $this</h3>";
        foreach ($this->livres as $livre) {
            $result .= $livre . "<br>";
        }

        return $result;
    }

    public function __toString()
    {
        return "$this->prenom $this->nom";
    }

}

