<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\saisonRepository")
 */
class saison
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
     * @var int
     *
     * @ORM\Column(name="numSaison", type="integer")
     */
    private $numSaison;

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
     * Set numSaison
     *
     * @param integer $numSaison
     *
     * @return saison
     */
    public function setNumSaison($numSaison)
    {
        $this->numSaison = $numSaison;

        return $this;
    }

    /**
     * Get numSaison
     *
     * @return int
     */
    public function getNumSaison()
    {
        return $this->numSaison;
    }

    /**
     * Set nbEpisode
     *
     * @param integer $nbEpisode
     *
     * @return saison
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
}

