<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\UsersInterest
 */
class UsersInterest
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var MeetingApp\CoreBundle\Entity\Interest
     */
    private $intrstid;

    /**
     * @var MeetingApp\CoreBundle\Entity\Users
     */
    private $userid;


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
     * Set intrstid
     *
     * @param MeetingApp\CoreBundle\Entity\Interest $intrstid
     */
    public function setIntrstid(\MeetingApp\CoreBundle\Entity\Interest $intrstid)
    {
        $this->intrstid = $intrstid;
    }

    /**
     * Get intrstid
     *
     * @return MeetingApp\CoreBundle\Entity\Interest 
     */
    public function getIntrstid()
    {
        return $this->intrstid;
    }

    /**
     * Set userid
     *
     * @param MeetingApp\CoreBundle\Entity\Users $userid
     */
    public function setUserid(\MeetingApp\CoreBundle\Entity\Users $userid)
    {
        $this->userid = $userid;
    }

    /**
     * Get userid
     *
     * @return MeetingApp\CoreBundle\Entity\Users 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}