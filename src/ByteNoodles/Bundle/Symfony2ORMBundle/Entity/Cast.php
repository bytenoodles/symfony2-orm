<?php

namespace ByteNoodles\Bundle\Symfony2ORMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cast")
 */
class Cast{
        
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Events", inversedBy="cast")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id", nullable=false)
     **/
    protected $person;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Film", inversedBy="cast")
     * @ORM\JoinColumn(name="film_id", referencedColumnName="id", nullable=false)
     **/
    protected $film;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="cast")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id", nullable=false)
     */
    protected $role;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $income;

    /**
     * Set income
     *
     * @param string $income
     * @return Cast
     */
    public function setIncome($income)
    {
        $this->income = $income;
    
        return $this;
    }

    /**
     * Get income
     *
     * @return string 
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set person
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Events $person
     * @return Cast
     */
    public function setPerson(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Events $person)
    {
        $this->person = $person;
    
        return $this;
    }

    /**
     * Get person
     *
     * @return \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Events 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set film
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film $film
     * @return Cast
     */
    public function setFilm(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film $film)
    {
        $this->film = $film;
    
        return $this;
    }

    /**
     * Get film
     *
     * @return \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Film 
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set role
     *
     * @param \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Role $role
     * @return Cast
     */
    public function setRole(\ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Role $role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \ByteNoodles\Bundle\Symfony2ORMBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}