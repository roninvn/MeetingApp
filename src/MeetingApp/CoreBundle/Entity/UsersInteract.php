<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\UsersInteract
 */
class UsersInteract
{
    /**
     * @var datetime $dtm
     */
    private $dtm;

    /**
     * @var string $usr1ip
     */
    private $usr1ip;

    /**
     * @var string $usr2ip
     */
    private $usr2ip;

    /**
     * @var string $usr1phonenum
     */
    private $usr1phonenum;

    /**
     * @var string $usr2phonenum
     */
    private $usr2phonenum;

    /**
     * @var string $usr1phonemodel
     */
    private $usr1phonemodel;

    /**
     * @var string $usr2phonemodel
     */
    private $usr2phonemodel;

    /**
     * @var string $usr1version
     */
    private $usr1version;

    /**
     * @var string $usr2version
     */
    private $usr2version;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var MeetingApp\CoreBundle\Entity\Interaction
     */
    private $intact;

    /**
     * @var MeetingApp\CoreBundle\Entity\Users
     */
    private $usr1;

    /**
     * @var MeetingApp\CoreBundle\Entity\Users
     */
    private $usr2;


    /**
     * Set dtm
     *
     * @param datetime $dtm
     */
    public function setDtm($dtm)
    {
        $this->dtm = $dtm;
    }

    /**
     * Get dtm
     *
     * @return datetime 
     */
    public function getDtm()
    {
        return $this->dtm;
    }

    /**
     * Set usr1ip
     *
     * @param string $usr1ip
     */
    public function setUsr1ip($usr1ip)
    {
        $this->usr1ip = $usr1ip;
    }

    /**
     * Get usr1ip
     *
     * @return string 
     */
    public function getUsr1ip()
    {
        return $this->usr1ip;
    }

    /**
     * Set usr2ip
     *
     * @param string $usr2ip
     */
    public function setUsr2ip($usr2ip)
    {
        $this->usr2ip = $usr2ip;
    }

    /**
     * Get usr2ip
     *
     * @return string 
     */
    public function getUsr2ip()
    {
        return $this->usr2ip;
    }

    /**
     * Set usr1phonenum
     *
     * @param string $usr1phonenum
     */
    public function setUsr1phonenum($usr1phonenum)
    {
        $this->usr1phonenum = $usr1phonenum;
    }

    /**
     * Get usr1phonenum
     *
     * @return string 
     */
    public function getUsr1phonenum()
    {
        return $this->usr1phonenum;
    }

    /**
     * Set usr2phonenum
     *
     * @param string $usr2phonenum
     */
    public function setUsr2phonenum($usr2phonenum)
    {
        $this->usr2phonenum = $usr2phonenum;
    }

    /**
     * Get usr2phonenum
     *
     * @return string 
     */
    public function getUsr2phonenum()
    {
        return $this->usr2phonenum;
    }

    /**
     * Set usr1phonemodel
     *
     * @param string $usr1phonemodel
     */
    public function setUsr1phonemodel($usr1phonemodel)
    {
        $this->usr1phonemodel = $usr1phonemodel;
    }

    /**
     * Get usr1phonemodel
     *
     * @return string 
     */
    public function getUsr1phonemodel()
    {
        return $this->usr1phonemodel;
    }

    /**
     * Set usr2phonemodel
     *
     * @param string $usr2phonemodel
     */
    public function setUsr2phonemodel($usr2phonemodel)
    {
        $this->usr2phonemodel = $usr2phonemodel;
    }

    /**
     * Get usr2phonemodel
     *
     * @return string 
     */
    public function getUsr2phonemodel()
    {
        return $this->usr2phonemodel;
    }

    /**
     * Set usr1version
     *
     * @param string $usr1version
     */
    public function setUsr1version($usr1version)
    {
        $this->usr1version = $usr1version;
    }

    /**
     * Get usr1version
     *
     * @return string 
     */
    public function getUsr1version()
    {
        return $this->usr1version;
    }

    /**
     * Set usr2version
     *
     * @param string $usr2version
     */
    public function setUsr2version($usr2version)
    {
        $this->usr2version = $usr2version;
    }

    /**
     * Get usr2version
     *
     * @return string 
     */
    public function getUsr2version()
    {
        return $this->usr2version;
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
     * Set intact
     *
     * @param MeetingApp\CoreBundle\Entity\Interaction $intact
     */
    public function setIntact(\MeetingApp\CoreBundle\Entity\Interaction $intact)
    {
        $this->intact = $intact;
    }

    /**
     * Get intact
     *
     * @return MeetingApp\CoreBundle\Entity\Interaction 
     */
    public function getIntact()
    {
        return $this->intact;
    }

    /**
     * Set usr1
     *
     * @param MeetingApp\CoreBundle\Entity\Users $usr1
     */
    public function setUsr1(\MeetingApp\CoreBundle\Entity\Users $usr1)
    {
        $this->usr1 = $usr1;
    }

    /**
     * Get usr1
     *
     * @return MeetingApp\CoreBundle\Entity\Users 
     */
    public function getUsr1()
    {
        return $this->usr1;
    }

    /**
     * Set usr2
     *
     * @param MeetingApp\CoreBundle\Entity\Users $usr2
     */
    public function setUsr2(\MeetingApp\CoreBundle\Entity\Users $usr2)
    {
        $this->usr2 = $usr2;
    }

    /**
     * Get usr2
     *
     * @return MeetingApp\CoreBundle\Entity\Users 
     */
    public function getUsr2()
    {
        return $this->usr2;
    }
}