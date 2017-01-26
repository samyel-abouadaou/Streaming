<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\genreRepository")
 */
class genre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="serie", mappedBy="genre")
     */
    private $serie;
    
    /**
     * @ORM\OneToMany(targetEntity="film", mappedBy="genre")
     */
    private $films;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return genre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add film
     *
     * @param \AppBundle\Entity\film $film
     *
     * @return genre
     */
    public function addFilm(\AppBundle\Entity\film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \AppBundle\Entity\film $film
     */
    public function removeFilm(\AppBundle\Entity\film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }

    /**
     * Add serie
     *
     * @param \AppBundle\Entity\serie $serie
     *
     * @return genre
     */
    public function addSerie(\AppBundle\Entity\serie $serie)
    {
        $this->serie[] = $serie;

        return $this;
    }

    /**
     * Remove serie
     *
     * @param \AppBundle\Entity\serie $serie
     */
    public function removeSerie(\AppBundle\Entity\serie $serie)
    {
        $this->serie->removeElement($serie);
    }

    /**
     * Get serie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSerie()
    {
        return $this->serie;
    }
}
