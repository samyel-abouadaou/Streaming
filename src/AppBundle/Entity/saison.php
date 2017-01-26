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
     * @ORM\ManyToOne(targetEntity="serie", inversedBy="saison")
     * @ORM\JoinColumn(name="serie_id")
     */
    private $serie;
    
    /**
     * @ORM\OneToMany(targetEntity="episode", mappedBy="saison")
     */
    private $episodes;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add episode
     *
     * @param \AppBundle\Entity\episode $episode
     *
     * @return saison
     */
    public function addEpisode(\AppBundle\Entity\episode $episode)
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \AppBundle\Entity\episode $episode
     */
    public function removeEpisode(\AppBundle\Entity\episode $episode)
    {
        $this->episodes->removeElement($episode);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }
}
