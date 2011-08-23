<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\Users
 */
class Users
{
    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $hashedpwd
     */
    private $hashedpwd;

    /**
     * @var string $firstname
     */
    private $firstname;

    /**
     * @var string $lastname
     */
    private $lastname;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var datetime $dob
     */
    private $dob;

    /**
     * @var integer $gender
     */
    private $gender;

    /**
     * @var string $profes
     */
    private $profes;

    /**
     * @var text $intro
     */
    private $intro;

    /**
     * @var string $phonenumber
     */
    private $phonenumber;

    /**
     * @var string $photolink
     */
    private $photolink;

    /**
     * @var string $fbname
     */
    private $fbname;

    /**
     * @var string $lkname
     */
    private $lkname;

    /**
     * @var datetime $lastactiontime
     */
    private $lastactiontime;

    /**
     * @var string $lastip
     */
    private $lastip;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var MeetingApp\CoreBundle\Entity\UsersRole
     */
    private $role;


    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set hashedpwd
     *
     * @param string $hashedpwd
     */
    public function setHashedpwd($hashedpwd)
    {
        $this->hashedpwd = $hashedpwd;
    }

    /**
     * Get hashedpwd
     *
     * @return string 
     */
    public function getHashedpwd()
    {
        return $this->hashedpwd;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dob
     *
     * @param datetime $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * Get dob
     *
     * @return datetime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set profes
     *
     * @param string $profes
     */
    public function setProfes($profes)
    {
        $this->profes = $profes;
    }

    /**
     * Get profes
     *
     * @return string 
     */
    public function getProfes()
    {
        return $this->profes;
    }

    /**
     * Set intro
     *
     * @param text $intro
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;
    }

    /**
     * Get intro
     *
     * @return text 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set photolink
     *
     * @param string $photolink
     */
    public function setPhotolink($photolink)
    {
        $this->photolink = $photolink;
    }

    /**
     * Get photolink
     *
     * @return string 
     */
    public function getPhotolink()
    {
        return $this->photolink;
    }

    /**
     * Set fbname
     *
     * @param string $fbname
     */
    public function setFbname($fbname)
    {
        $this->fbname = $fbname;
    }

    /**
     * Get fbname
     *
     * @return string 
     */
    public function getFbname()
    {
        return $this->fbname;
    }

    /**
     * Set lkname
     *
     * @param string $lkname
     */
    public function setLkname($lkname)
    {
        $this->lkname = $lkname;
    }

    /**
     * Get lkname
     *
     * @return string 
     */
    public function getLkname()
    {
        return $this->lkname;
    }

    /**
     * Set lastactiontime
     *
     * @param datetime $lastactiontime
     */
    public function setLastactiontime($lastactiontime)
    {
        $this->lastactiontime = $lastactiontime;
    }

    /**
     * Get lastactiontime
     *
     * @return datetime 
     */
    public function getLastactiontime()
    {
        return $this->lastactiontime;
    }

    /**
     * Set lastip
     *
     * @param string $lastip
     */
    public function setLastip($lastip)
    {
        $this->lastip = $lastip;
    }

    /**
     * Get lastip
     *
     * @return string 
     */
    public function getLastip()
    {
        return $this->lastip;
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
     * Set role
     *
     * @param MeetingApp\CoreBundle\Entity\UsersRole $role
     */
    public function setRole(\MeetingApp\CoreBundle\Entity\UsersRole $role)
    {
        $this->role = $role;
    }

    /**
     * Get role
     *
     * @return MeetingApp\CoreBundle\Entity\UsersRole 
     */
    public function getRole()
    {
        return $this->role;
    }
}