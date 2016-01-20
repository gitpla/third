<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersContactMail
 *
 * @ORM\Table(name="users_contact_mail", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"ID_USER", "MAIL"}), @ORM\UniqueConstraint(name="NewIndex2", columns={"ID_USER", "MAILBOX"}), @ORM\UniqueConstraint(name="NewIndex3", columns={"ID_USER", "GG"}), @ORM\UniqueConstraint(name="NewIndex4", columns={"ID_USER", "SKYPE"}), @ORM\UniqueConstraint(name="NewIndex5", columns={"ID_USER", "LOGIN"})}, indexes={@ORM\Index(name="IDX_2A9D08BBF8371B55", columns={"ID_USER"})})
 * @ORM\Entity
 */
class UsersContactMail
{
    /**
     * @var string
     *
     * @ORM\Column(name="GG", type="string", length=45, nullable=true)
     */
    private $gg;

    /**
     * @var string
     *
     * @ORM\Column(name="SKYPE", type="string", length=60, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="MAILBOX", type="string", length=384, nullable=true)
     */
    private $mailbox;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=384, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=120, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSW", type="string", length=120, nullable=true)
     */
    private $passw;

    /**
     * @var string
     *
     * @ORM\Column(name="HOST", type="string", length=60, nullable=true)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL_TITLE", type="string", length=384, nullable=true)
     */
    private $mailTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_TYPE", type="smallint", nullable=true)
     */
    private $mailType;

    /**
     * @var integer
     *
     * @ORM\Column(name="SEND_STATUS", type="smallint", nullable=true)
     */
    private $sendStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

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
     * Set gg
     *
     * @param string $gg
     *
     * @return UsersContactMail
     */
    public function setGg($gg)
    {
        $this->gg = $gg;

        return $this;
    }

    /**
     * Get gg
     *
     * @return string
     */
    public function getGg()
    {
        return $this->gg;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return UsersContactMail
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set mailbox
     *
     * @param string $mailbox
     *
     * @return UsersContactMail
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;

        return $this;
    }

    /**
     * Get mailbox
     *
     * @return string
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return UsersContactMail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return UsersContactMail
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set passw
     *
     * @param string $passw
     *
     * @return UsersContactMail
     */
    public function setPassw($passw)
    {
        $this->passw = $passw;

        return $this;
    }

    /**
     * Get passw
     *
     * @return string
     */
    public function getPassw()
    {
        return $this->passw;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return UsersContactMail
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set mailTitle
     *
     * @param string $mailTitle
     *
     * @return UsersContactMail
     */
    public function setMailTitle($mailTitle)
    {
        $this->mailTitle = $mailTitle;

        return $this;
    }

    /**
     * Get mailTitle
     *
     * @return string
     */
    public function getMailTitle()
    {
        return $this->mailTitle;
    }

    /**
     * Set mailType
     *
     * @param integer $mailType
     *
     * @return UsersContactMail
     */
    public function setMailType($mailType)
    {
        $this->mailType = $mailType;

        return $this;
    }

    /**
     * Get mailType
     *
     * @return integer
     */
    public function getMailType()
    {
        return $this->mailType;
    }

    /**
     * Set sendStatus
     *
     * @param integer $sendStatus
     *
     * @return UsersContactMail
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return UsersContactMail
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * @return UsersContactMail
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
