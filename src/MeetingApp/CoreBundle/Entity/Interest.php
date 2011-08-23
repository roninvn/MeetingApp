<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\Interest
 */
class Interest
{
    /**
     * @var string $interest
     */
    private $interest;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set interest
     *
     * @param string $interest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
    }

    /**
     * Get interest
     *
     * @return string 
     */
    public function getInterest()
    {
        return $this->interest;
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