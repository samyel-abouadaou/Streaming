<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\filmRepository")
 */
class film
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
     * @ORM\JoinTable(name="films_realises")
     * @ORM\ManyToMany(targetEntity="casting", inversedBy="filmRealises")
     */
    private $realisateurs;
    
    /**
     * @ORM\ManyToOne(targetEntity="genre", inversedBy="films")
     * @ORM\JoinColumn(name="genre_id")
     */
    private $genre;
    
    /**
     * @ORM\ManyToOne(targetEntity="pays", inversedBy="films")
     * @ORM\JoinColumn(name="pays_id")
     */
    private $pays;
    
    /**
     * @ORM\OneToMany(targetEntity="lien", mappedBy="film")
     */
    private $liens;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeProd", type="integer")
     */
    private $anneeProd;


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
     * @return film
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
     * @return film
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
     * Set duree
     *
     * @param integer $duree
     *
     * @return film
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set anneeProd
     *
     * @param integer $anneeProd
     *
     * @return film
     */
    public function setAnneeProd($anneeProd)
    {
        $this->anneeProd = $anneeProd;

        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return int
     */
    public function getAnneeProd()
    {
        return $this->anneeProd;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\genre $genre
     *
     * @return film
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

    /**
     * Set countries
     *
     * @param \AppBundle\Entity\pays $countries
     *
     * @return film
     */
    public function setCountries(\AppBundle\Entity\pays $countries = null)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get countries
     *
     * @return \AppBundle\Entity\pays
     */
    public function getCountries()
    {
        return $this->countries;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->liens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lien
     *
     * @param \AppBundle\Entity\lien $lien
     *
     * @return film
     */
    public function addLien(\AppBundle\Entity\lien $lien)
    {
        $this->liens[] = $lien;

        return $this;
    }

    /**
     * Remove lien
     *
     * @param \AppBundle\Entity\lien $lien
     */
    public function removeLien(\AppBundle\Entity\lien $lien)
    {
        $this->liens->removeElement($lien);
    }

    /**
     * Get liens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLiens()
    {
        return $this->liens;
    }

    /**
     * Set pays
     *
     * @param \AppBundle\Entity\pays $pays
     *
     * @return film
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
     * Add realisateur
     *
     * @param \AppBundle\Entity\casting $realisateur
     *
     * @return film
     */
    public function addRealisateur(\AppBundle\Entity\casting $realisateur)
    {
        $this->realisateurs[] = $realisateur;

        return $this;
    }

    /**
     * Remove realisateur
     *
     * @param \AppBundle\Entity\casting $realisateur
     */
    public function removeRealisateur(\AppBundle\Entity\casting $realisateur)
    {
        $this->realisateurs->removeElement($realisateur);
    }

    /**
     * Get realisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealisateurs()
    {
        return $this->realisateurs;
    }
}
