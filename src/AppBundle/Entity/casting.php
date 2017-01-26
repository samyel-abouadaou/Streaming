<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * casting
 *
 * @ORM\Table(name="casting")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\castingRepository")
 */
class casting
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
     * @ORM\ManyToMany(targetEntity="film", mappedBy="realisateurs")
     */
    private $filmRealises;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;


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
     * @return casting
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return casting
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filmRealises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add filmRealise
     *
     * @param \AppBundle\Entity\film $filmRealise
     *
     * @return casting
     */
    public function addFilmRealise(\AppBundle\Entity\film $filmRealise)
    {
        $this->filmRealises[] = $filmRealise;

        return $this;
    }

    /**
     * Remove filmRealise
     *
     * @param \AppBundle\Entity\film $filmRealise
     */
    public function removeFilmRealise(\AppBundle\Entity\film $filmRealise)
    {
        $this->filmRealises->removeElement($filmRealise);
    }

    /**
     * Get filmRealises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmRealises()
    {
        return $this->filmRealises;
    }
}
