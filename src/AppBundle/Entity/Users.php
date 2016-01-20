<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"MAIL"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="STAN", type="smallint", nullable=true)
     */
    private $stan;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLEC", type="smallint", nullable=true)
     */
    private $plec;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE", type="string", length=32, nullable=true)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO", type="string", length=32, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=128, nullable=true)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME", type="datetime", nullable=true)
     */
    private $dataTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME2", type="datetime", nullable=true)
     */
    private $dataTime2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_URODZENIA", type="date", nullable=true)
     */
    private $dataUrodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=32, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=64, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="XID", type="string", length=128, nullable=true)
     */
    private $xid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_AKTYW", type="datetime", nullable=true)
     */
    private $dataAktyw;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD2", type="string", length=128, nullable=true)
     */
    private $password2;

    /**
     * @var string
     *
     * @ORM\Column(name="LANG", type="string", length=6, nullable=true)
     */
    private $lang;

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_ZACHETY", type="smallint", nullable=true)
     */
    private $mailZachety;

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_PONOW", type="smallint", nullable=true)
     */
    private $mailPonow;

    /**
     * @var string
     *
     * @ORM\Column(name="BROWSWER", type="string", length=255, nullable=true)
     */
    private $browswer;

    /**
     * @var string
     *
     * @ORM\Column(name="KAMPANIA", type="string", length=9, nullable=true)
     */
    private $kampania;

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_ART1", type="smallint", nullable=true)
     */
    private $mailArt1;

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_PROMO_1", type="smallint", nullable=true)
     */
    private $mailPromo1;

    /**
     * @var integer
     *
     * @ORM\Column(name="MAIL_PROMO_2", type="smallint", nullable=true)
     */
    private $mailPromo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set stan
     *
     * @param integer $stan
     *
     * @return Users
     */
    public function setStan($stan)
    {
        $this->stan = $stan;

        return $this;
    }

    /**
     * Get stan
     *
     * @return integer
     */
    public function getStan()
    {
        return $this->stan;
    }

    /**
     * Set plec
     *
     * @param integer $plec
     *
     * @return Users
     */
    public function setPlec($plec)
    {
        $this->plec = $plec;

        return $this;
    }

    /**
     * Get plec
     *
     * @return integer
     */
    public function getPlec()
    {
        return $this->plec;
    }

    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return Users
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return Users
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Users
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
     * Set dataTime
     *
     * @param \DateTime $dataTime
     *
     * @return Users
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
     * Set dataTime2
     *
     * @param \DateTime $dataTime2
     *
     * @return Users
     */
    public function setDataTime2($dataTime2)
    {
        $this->dataTime2 = $dataTime2;

        return $this;
    }

    /**
     * Get dataTime2
     *
     * @return \DateTime
     */
    public function getDataTime2()
    {
        return $this->dataTime2;
    }

    /**
     * Set dataUrodzenia
     *
     * @param \DateTime $dataUrodzenia
     *
     * @return Users
     */
    public function setDataUrodzenia($dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;

        return $this;
    }

    /**
     * Get dataUrodzenia
     *
     * @return \DateTime
     */
    public function getDataUrodzenia()
    {
        return $this->dataUrodzenia;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     *
     * @return Users
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get miejscowosc
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set xid
     *
     * @param string $xid
     *
     * @return Users
     */
    public function setXid($xid)
    {
        $this->xid = $xid;

        return $this;
    }

    /**
     * Get xid
     *
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * Set dataAktyw
     *
     * @param \DateTime $dataAktyw
     *
     * @return Users
     */
    public function setDataAktyw($dataAktyw)
    {
        $this->dataAktyw = $dataAktyw;

        return $this;
    }

    /**
     * Get dataAktyw
     *
     * @return \DateTime
     */
    public function getDataAktyw()
    {
        return $this->dataAktyw;
    }

    /**
     * Set password2
     *
     * @param string $password2
     *
     * @return Users
     */
    public function setPassword2($password2)
    {
        $this->password2 = $password2;

        return $this;
    }

    /**
     * Get password2
     *
     * @return string
     */
    public function getPassword2()
    {
        return $this->password2;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Users
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set mailZachety
     *
     * @param integer $mailZachety
     *
     * @return Users
     */
    public function setMailZachety($mailZachety)
    {
        $this->mailZachety = $mailZachety;

        return $this;
    }

    /**
     * Get mailZachety
     *
     * @return integer
     */
    public function getMailZachety()
    {
        return $this->mailZachety;
    }

    /**
     * Set mailPonow
     *
     * @param integer $mailPonow
     *
     * @return Users
     */
    public function setMailPonow($mailPonow)
    {
        $this->mailPonow = $mailPonow;

        return $this;
    }

    /**
     * Get mailPonow
     *
     * @return integer
     */
    public function getMailPonow()
    {
        return $this->mailPonow;
    }

    /**
     * Set browswer
     *
     * @param string $browswer
     *
     * @return Users
     */
    public function setBrowswer($browswer)
    {
        $this->browswer = $browswer;

        return $this;
    }

    /**
     * Get browswer
     *
     * @return string
     */
    public function getBrowswer()
    {
        return $this->browswer;
    }

    /**
     * Set kampania
     *
     * @param string $kampania
     *
     * @return Users
     */
    public function setKampania($kampania)
    {
        $this->kampania = $kampania;

        return $this;
    }

    /**
     * Get kampania
     *
     * @return string
     */
    public function getKampania()
    {
        return $this->kampania;
    }

    /**
     * Set mailArt1
     *
     * @param integer $mailArt1
     *
     * @return Users
     */
    public function setMailArt1($mailArt1)
    {
        $this->mailArt1 = $mailArt1;

        return $this;
    }

    /**
     * Get mailArt1
     *
     * @return integer
     */
    public function getMailArt1()
    {
        return $this->mailArt1;
    }

    /**
     * Set mailPromo1
     *
     * @param integer $mailPromo1
     *
     * @return Users
     */
    public function setMailPromo1($mailPromo1)
    {
        $this->mailPromo1 = $mailPromo1;

        return $this;
    }

    /**
     * Get mailPromo1
     *
     * @return integer
     */
    public function getMailPromo1()
    {
        return $this->mailPromo1;
    }

    /**
     * Set mailPromo2
     *
     * @param integer $mailPromo2
     *
     * @return Users
     */
    public function setMailPromo2($mailPromo2)
    {
        $this->mailPromo2 = $mailPromo2;

        return $this;
    }

    /**
     * Get mailPromo2
     *
     * @return integer
     */
    public function getMailPromo2()
    {
        return $this->mailPromo2;
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
