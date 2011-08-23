<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\Interaction
 */
class Interaction
{
    /**
     * @var string $intact
     */
    private $intact;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set intact
     *
     * @param string $intact
     */
    public function setIntact($intact)
    {
        $this->intact = $intact;
    }

    /**
     * Get intact
     *
     * @return string 
     */
    public function getIntact()
    {
        return $this->intact;
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