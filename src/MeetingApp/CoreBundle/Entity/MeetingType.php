<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\MeetingType
 */
class MeetingType
{
    /**
     * @var string $meetingtype
     */
    private $meetingtype;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set meetingtype
     *
     * @param string $meetingtype
     */
    public function setMeetingtype($meetingtype)
    {
        $this->meetingtype = $meetingtype;
    }

    /**
     * Get meetingtype
     *
     * @return string 
     */
    public function getMeetingtype()
    {
        return $this->meetingtype;
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