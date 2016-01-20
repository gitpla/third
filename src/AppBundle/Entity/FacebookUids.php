<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacebookUids
 *
 * @ORM\Table(name="facebook_uids", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"UID"})})
 * @ORM\Entity
 */
class FacebookUids
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FACE_REL", type="integer", nullable=true)
     */
    private $idFaceRel;

    /**
     * @var string
     *
     * @ORM\Column(name="UID", type="string", length=32, nullable=true)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="SEND_STATUS", type="smallint", nullable=true)
     */
    private $sendStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return FacebookUids
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idFaceRel
     *
     * @param integer $idFaceRel
     *
     * @return FacebookUids
     */
    public function setIdFaceRel($idFaceRel)
    {
        $this->idFaceRel = $idFaceRel;

        return $this;
    }

    /**
     * Get idFaceRel
     *
     * @return integer
     */
    public function getIdFaceRel()
    {
        return $this->idFaceRel;
    }

    /**
     * Set uid
     *
     * @param string $uid
     *
     * @return FacebookUids
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set sendStatus
     *
     * @param integer $sendStatus
     *
     * @return FacebookUids
     */
    public function setSendStatus($sendStatus)
    {
        $this->sendStatus = $sendStatus;

        return $this;
    }

    /**
     * Get sendStatus
     *
     * @return integer
     */
    public function getSendStatus()
    {
        return $this->sendStatus;
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
