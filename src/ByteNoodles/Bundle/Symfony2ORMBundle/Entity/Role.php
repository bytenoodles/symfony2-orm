<?php

namespace ByteNoodles\Bundle\Symfony2ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role{
    
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
    * @ORM\OneToMany(targetEntity="Cast", mappedBy="role")
    */
    protected $cast;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cast = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Role
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
     * Add cast
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Cast $cast
     * @return Role
     */
    public function addCast(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Cast $cast)
    {
        $this->cast[] = $cast;
    
        return $this;
    }

    /**
     * Remove cast
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Cast $cast
     */
    public function removeCast(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Cast $cast)
    {
        $this->cast->removeElement($cast);
    }

    /**
     * Get cast
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCast()
    {
        return $this->cast;
    }
}