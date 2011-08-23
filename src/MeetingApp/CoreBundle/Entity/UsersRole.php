<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\UsersRole
 */
class UsersRole
{
    /**
     * @var string $rolename
     */
    private $rolename;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set rolename
     *
     * @param string $rolename
     */
    public function setRolename($rolename)
    {
        $this->rolename = $rolename;
    }

    /**
     * Get rolename
     *
     * @return string 
     */
    public function getRolename()
    {
        return $this->rolename;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
}