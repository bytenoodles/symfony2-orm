<?php

namespace ByteNoodles\Bundle\Symfony2ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="person")
 */
class Person{
    
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
     * @ORM\Column(type="date")
     */
    protected $birthDate;
    
    /**
    * @ORM\OneToOne(targetEntity="Contact")
    * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
    */
    protected $contact;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Cast", mappedBy="person")
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
     * @return Person
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
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    
        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set contact
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Contact $contact
     * @return Person
     */
    public function setContact(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Add cast
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Cast $cast
     * @return Person
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