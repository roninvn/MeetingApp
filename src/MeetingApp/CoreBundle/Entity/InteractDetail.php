<?php

namespace MeetingApp\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingApp\CoreBundle\Entity\InteractDetail
 */
class InteractDetail
{
    /**
     * @var integer $intactid
     */
    private $intactid;

    /**
     * @var datetime $dtm
     */
    private $dtm;

    /**
     * @var text $logval
     */
    private $logval;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set intactid
     *
     * @param integer $intactid
     */
    public function setIntactid($intactid)
    {
        $this->intactid = $intactid;
    }

    /**
     * Get intactid
     *
     * @return integer 
     */
    public function getIntactid()
    {
        return $this->intactid;
    }

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
     * Set logval
     *
     * @param text $logval
     */
    public function setLogval($logval)
    {
        $this->logval = $logval;
    }

    /**
     * Get logval
     *
     * @return text 
     */
    public function getLogval()
    {
        return $this->logval;
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