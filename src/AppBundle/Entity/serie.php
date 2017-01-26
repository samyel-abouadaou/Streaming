<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serieRepository")
 */
class serie
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
     * @ORM\OneToMany(targetEntity="saison", mappedBy="serie")
     */
    private $saison;
    
    /**
     * @ORM\ManyToOne(targetEntity="pays", inversedBy="serie")
     * @ORM\JoinColumn(name="pays_id")
     */
    private $pays;
    
    /**
     * @ORM\ManyToOne(targetEntity="genre", inversedBy="serie")
     * @ORM\JoinColumn(name="genre_id")
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEpisode", type="integer")
     */
    private $nbEpisode;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return serie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return serie
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set nbEpisode
     *
     * @param integer $nbEpisode
     *
     * @return serie
     */
    public function setNbEpisode($nbEpisode)
    {
        $this->nbEpisode = $nbEpisode;

        return $this;
    }

    /**
     * Get nbEpisode
     *
     * @return int
     */
    public function getNbEpisode()
    {
        return $this->nbEpisode;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->saison = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add saison
     *
     * @param \AppBundle\Entity\saison $saison
     *
     * @return serie
     */
    public function addSaison(\AppBundle\Entity\saison $saison)
    {
        $this->saison[] = $saison;

        return $this;
    }

    /**
     * Remove saison
     *
     * @param \AppBundle\Entity\saison $saison
     */
    public function removeSaison(\AppBundle\Entity\saison $saison)
    {
        $this->saison->removeElement($saison);
    }

    /**
     * Get saison
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * Set pays
     *
     * @param \AppBundle\Entity\pays $pays
     *
     * @return serie
     */
    public function setPays(\AppBundle\Entity\pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \AppBundle\Entity\pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\genre $genre
     *
     * @return serie
     */
    public function setGenre(\AppBundle\Entity\genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\genre
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
