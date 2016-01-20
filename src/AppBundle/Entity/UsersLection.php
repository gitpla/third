<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersLection
 *
 * @ORM\Table(name="users_lection", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"ID_USER", "ID_LECTION"})}, indexes={@ORM\Index(name="IDX_4CE5E202F8371B55", columns={"ID_USER"})})
 * @ORM\Entity
 */
class UsersLection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LECTION", type="integer", nullable=false)
     */
    private $idLection;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PERIOD_TIME", type="datetime", nullable=true)
     */
    private $periodTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LAST_DATE", type="datetime", nullable=false)
     */
    private $lastDate = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_ACTIVATOR", type="smallint", nullable=true)
     */
    private $mailActivator;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODE_ACTIVATOR", type="smallint", nullable=true)
     */
    private $codeActivator;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_USER", referencedColumnName="ID")
     * })
     */
    private $idUser;



    /**
     * Set idLection
     *
     * @param integer $idLection
     *
     * @return UsersLection
     */
    public function setIdLection($idLection)
    {
        $this->idLection = $idLection;

        return $this;
    }

    /**
     * Get idLection
     *
     * @return integer
     */
    public function getIdLection()
    {
        return $this->idLection;
    }

    /**
     * Set periodTime
     *
     * @param \DateTime $periodTime
     *
     * @return UsersLection
     */
    public function setPeriodTime($periodTime)
    {
        $this->periodTime = $periodTime;

        return $this;
    }

    /**
     * Get periodTime
     *
     * @return \DateTime
     */
    public function getPeriodTime()
    {
        return $this->periodTime;
    }

    /**
     * Set lastDate
     *
     * @param \DateTime $lastDate
     *
     * @return UsersLection
     */
    public function setLastDate($lastDate)
    {
        $this->lastDate = $lastDate;

        return $this;
    }

    /**
     * Get lastDate
     *
     * @return \DateTime
     */
    public function getLastDate()
    {
        return $this->lastDate;
    }

    /**
     * Set mailActivator
     *
     * @param integer $mailActivator
     *
     * @return UsersLection
     */
    public function setMailActivator($mailActivator)
    {
        $this->mailActivator = $mailActivator;

        return $this;
    }

    /**
     * Get mailActivator
     *
     * @return integer
     */
    public function getMailActivator()
    {
        return $this->mailActivator;
    }

    /**
     * Set codeActivator
     *
     * @param integer $codeActivator
     *
     * @return UsersLection
     */
    public function setCodeActivator($codeActivator)
    {
        $this->codeActivator = $codeActivator;

        return $this;
    }

    /**
     * Get codeActivator
     *
     * @return integer
     */
    public function getCodeActivator()
    {
        return $this->codeActivator;
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
     * Set idUser
     *
     * @param \AppBundle\Entity\Users $idUser
     *
     * @return UsersLection
     */
    public function setIdUser(\AppBundle\Entity\Users $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\Users
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
