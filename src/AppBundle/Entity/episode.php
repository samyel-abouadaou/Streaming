<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class episode
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
     * @ORM\ManyToOne(targetEntity="serie")
     * @ORM\JoinColumn(name="serie_id")
     */
    private $serie;

    /**
     * @var int
     *
     * @ORM\Column(name="numEpisode", type="integer")
     */
    private $numEpisode;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;
    
    /**
     * @ORM\OneToMany(targetEntity="lien", mappedBy="episode")
     */
    private $liens;
    
    /**
     * @ORM\ManyToOne(targetEntity="saison", inversedBy="episodes")
     * @ORM\JoinColumn(name="saison_id")
     */
    private $saison;

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
     * Set numEpisode
     *
     * @param integer $numEpisode
     *
     * @return Episode
     */
    public function setNumEpisode($numEpisode)
    {
        $this->numEpisode = $numEpisode;

        return $this;
    }

    /**
     * Get numEpisode
     *
     * @return int
     */
    public function getNumEpisode()
    {
        return $this->numEpisode;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
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
     * @return episode
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
     * Set saison
     *
     * @param \AppBundle\Entity\saison $saison
     *
     * @return episode
     */
    public function setSaison(\AppBundle\Entity\saison $saison = null)
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return \AppBundle\Entity\saison
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * Set serie
     *
     * @param \AppBundle\Entity\serie $serie
     *
     * @return episode
     */
    public function setSerie(\AppBundle\Entity\serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \AppBundle\Entity\serie
     */
    public function getSerie()
    {
        return $this->serie;
    }
}
