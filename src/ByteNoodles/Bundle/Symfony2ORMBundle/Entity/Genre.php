<?php

namespace ByteNoodles\Bundle\Symfony2ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="genre")
 */
class Genre{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
    * @ORM\OneToMany(targetEntity="Film", mappedBy="genre")
    */
    protected $film;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->film = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Genre
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add film
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film $film
     * @return Genre
     */
    public function addFilm(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film $film)
    {
        $this->film[] = $film;
    
        return $this;
    }

    /**
     * Remove film
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film $film
     */
    public function removeFilm(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film $film)
    {
        $this->film->removeElement($film);
    }

    /**
     * Get film
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilm()
    {
        return $this->film;
    }
}