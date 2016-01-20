<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CronFcbWall
 *
 * @ORM\Table(name="cron_fcb_wall", uniqueConstraints={@ORM\UniqueConstraint(name="FK_cron_fcb_wall", columns={"ID_USER"})})
 * @ORM\Entity
 */
class CronFcbWall
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SENDQUEUE", type="smallint", nullable=true)
     */
    private $sendqueue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME", type="datetime", nullable=true)
     */
    private $dataTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME_SEND", type="datetime", nullable=true)
     */
    private $dataTimeSend;

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
     * Set sendqueue
     *
     * @param integer $sendqueue
     *
     * @return CronFcbWall
     */
    public function setSendqueue($sendqueue)
    {
        $this->sendqueue = $sendqueue;

        return $this;
    }

    /**
     * Get sendqueue
     *
     * @return integer
     */
    public function getSendqueue()
    {
        return $this->sendqueue;
    }

    /**
     * Set dataTime
     *
     * @param \DateTime $dataTime
     *
     * @return CronFcbWall
     */
    public function setDataTime($dataTime)
    {
        $this->dataTime = $dataTime;

        return $this;
    }

    /**
     * Get dataTime
     *
     * @return \DateTime
     */
    public function getDataTime()
    {
        return $this->dataTime;
    }

    /**
     * Set dataTimeSend
     *
     * @param \DateTime $dataTimeSend
     *
     * @return CronFcbWall
     */
    public function setDataTimeSend($dataTimeSend)
    {
        $this->dataTimeSend = $dataTimeSend;

        return $this;
    }

    /**
     * Get dataTimeSend
     *
     * @return \DateTime
     */
    public function getDataTimeSend()
    {
        return $this->dataTimeSend;
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
     * @return CronFcbWall
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
