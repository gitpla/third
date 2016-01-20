<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConnectFacebook
 *
 * @ORM\Table(name="connect_facebook", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"ID_USER", "ID_USER_FACEBOOK"}), @ORM\UniqueConstraint(name="NewIndex2", columns={"ID_USER_FACEBOOK"})}, indexes={@ORM\Index(name="IDX_7C0FAFF4F8371B55", columns={"ID_USER"})})
 * @ORM\Entity
 */
class ConnectFacebook
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_USER_FACEBOOK", type="string", length=72, nullable=true)
     */
    private $idUserFacebook;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISCONNECT", type="smallint", nullable=true)
     */
    private $isconnect;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME", type="datetime", nullable=false)
     */
    private $dataTime = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="OFFLINE_ACCESS", type="smallint", nullable=true)
     */
    private $offlineAccess = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="PUBLIC_OUT", type="smallint", nullable=true)
     */
    private $publicOut = '1';

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
     * Set idUserFacebook
     *
     * @param string $idUserFacebook
     *
     * @return ConnectFacebook
     */
    public function setIdUserFacebook($idUserFacebook)
    {
        $this->idUserFacebook = $idUserFacebook;

        return $this;
    }

    /**
     * Get idUserFacebook
     *
     * @return string
     */
    public function getIdUserFacebook()
    {
        return $this->idUserFacebook;
    }

    /**
     * Set isconnect
     *
     * @param integer $isconnect
     *
     * @return ConnectFacebook
     */
    public function setIsconnect($isconnect)
    {
        $this->isconnect = $isconnect;

        return $this;
    }

    /**
     * Get isconnect
     *
     * @return integer
     */
    public function getIsconnect()
    {
        return $this->isconnect;
    }

    /**
     * Set dataTime
     *
     * @param \DateTime $dataTime
     *
     * @return ConnectFacebook
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
     * Set offlineAccess
     *
     * @param integer $offlineAccess
     *
     * @return ConnectFacebook
     */
    public function setOfflineAccess($offlineAccess)
    {
        $this->offlineAccess = $offlineAccess;

        return $this;
    }

    /**
     * Get offlineAccess
     *
     * @return integer
     */
    public function getOfflineAccess()
    {
        return $this->offlineAccess;
    }

    /**
     * Set publicOut
     *
     * @param integer $publicOut
     *
     * @return ConnectFacebook
     */
    public function setPublicOut($publicOut)
    {
        $this->publicOut = $publicOut;

        return $this;
    }

    /**
     * Get publicOut
     *
     * @return integer
     */
    public function getPublicOut()
    {
        return $this->publicOut;
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
     * @return ConnectFacebook
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
