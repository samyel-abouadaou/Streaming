<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lien
 *
 * @ORM\Table(name="lien")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\lienRepository")
 */
class lien
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
     * @ORM\ManyToOne(targetEntity="film", inversedBy="liens")
     * @ORM\JoinColumn(name="film_id")
     */
    private $film;

    /**
     * @ORM\ManyToOne(targetEntity="episode", inversedBy="liens")
     * @ORM\JoinColumn(name="episode_id")
     */
    private $episode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set url
     *
     * @param string $url
     *
     * @return lien
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set film
     *
     * @param \AppBundle\Entity\film $film
     *
     * @return lien
     */
    public function setFilm(\AppBundle\Entity\film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \AppBundle\Entity\film
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set episode
     *
     * @param \AppBundle\Entity\episode $episode
     *
     * @return lien
     */
    public function setEpisode(\AppBundle\Entity\episode $episode = null)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \AppBundle\Entity\episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }
}
