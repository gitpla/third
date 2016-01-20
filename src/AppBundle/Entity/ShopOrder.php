<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopOrder
 *
 * @ORM\Table(name="shop_order", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"IDS_SESSION"})})
 * @ORM\Entity
 */
class ShopOrder
{
    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=8, nullable=true)
     */
    private $typ;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_MANUAL", type="string", length=32, nullable=true)
     */
    private $statusManual;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=64, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRICE", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="P24_METODA", type="string", length=10, nullable=true)
     */
    private $p24Metoda;

    /**
     * @var string
     *
     * @ORM\Column(name="PAYMENT_TYPE", type="string", length=3, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="PARTNUMBER", type="string", length=16, nullable=true)
     */
    private $partnumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME", type="datetime", nullable=true)
     */
    private $dataTime;

    /**
     * @var string
     *
     * @ORM\Column(name="P24_ORDER_ID", type="string", length=128, nullable=true)
     */
    private $p24OrderId;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_BACK_P24", type="string", length=128, nullable=true)
     */
    private $statusBackP24;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STATUS_BACK_P24_TIME", type="datetime", nullable=true)
     */
    private $statusBackP24Time;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_VERYF_P24", type="string", length=128, nullable=true)
     */
    private $statusVeryfP24;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STATUS_VERYF_P24_TIME", type="datetime", nullable=true)
     */
    private $statusVeryfP24Time;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA1", type="string", length=64, nullable=true)
     */
    private $nazwa1;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES1", type="string", length=64, nullable=true)
     */
    private $adres1;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC1", type="string", length=32, nullable=true)
     */
    private $miejscowosc1;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD1", type="string", length=6, nullable=true)
     */
    private $kod1;

    /**
     * @var string
     *
     * @ORM\Column(name="FVAT", type="string", length=1, nullable=true)
     */
    private $fvat;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=19, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA2", type="string", length=64, nullable=true)
     */
    private $nazwa2;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES2", type="string", length=64, nullable=true)
     */
    private $adres2;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD2", type="string", length=6, nullable=true)
     */
    private $kod2;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC2", type="string", length=32, nullable=true)
     */
    private $miejscowosc2;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=512, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="P24_CLIENTID", type="string", length=32, nullable=true)
     */
    private $p24Clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="PP_RECEIVER_ID", type="string", length=32, nullable=true)
     */
    private $ppReceiverId;

    /**
     * @var string
     *
     * @ORM\Column(name="PP_PAYMENT_STATUS", type="string", length=32, nullable=true)
     */
    private $ppPaymentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="PP_PAYMENT_DATE", type="string", length=48, nullable=true)
     */
    private $ppPaymentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="PP_TXN_ID", type="string", length=48, nullable=true)
     */
    private $ppTxnId;

    /**
     * @var string
     *
     * @ORM\Column(name="PP_PAYER_EMAIL", type="string", length=64, nullable=true)
     */
    private $ppPayerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="IDS_SESSION", type="string", length=64, nullable=true)
     */
    private $idsSession;

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=20, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="BROW", type="string", length=512, nullable=true)
     */
    private $brow;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set typ
     *
     * @param string $typ
     *
     * @return ShopOrder
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get typ
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return ShopOrder
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
     * Set statusManual
     *
     * @param string $statusManual
     *
     * @return ShopOrder
     */
    public function setStatusManual($statusManual)
    {
        $this->statusManual = $statusManual;

        return $this;
    }

    /**
     * Get statusManual
     *
     * @return string
     */
    public function getStatusManual()
    {
        return $this->statusManual;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ShopOrder
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * Set price
     *
     * @param integer $price
     *
     * @return ShopOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set p24Metoda
     *
     * @param string $p24Metoda
     *
     * @return ShopOrder
     */
    public function setP24Metoda($p24Metoda)
    {
        $this->p24Metoda = $p24Metoda;

        return $this;
    }

    /**
     * Get p24Metoda
     *
     * @return string
     */
    public function getP24Metoda()
    {
        return $this->p24Metoda;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return ShopOrder
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set partnumber
     *
     * @param string $partnumber
     *
     * @return ShopOrder
     */
    public function setPartnumber($partnumber)
    {
        $this->partnumber = $partnumber;

        return $this;
    }

    /**
     * Get partnumber
     *
     * @return string
     */
    public function getPartnumber()
    {
        return $this->partnumber;
    }

    /**
     * Set dataTime
     *
     * @param \DateTime $dataTime
     *
     * @return ShopOrder
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
     * Set p24OrderId
     *
     * @param string $p24OrderId
     *
     * @return ShopOrder
     */
    public function setP24OrderId($p24OrderId)
    {
        $this->p24OrderId = $p24OrderId;

        return $this;
    }

    /**
     * Get p24OrderId
     *
     * @return string
     */
    public function getP24OrderId()
    {
        return $this->p24OrderId;
    }

    /**
     * Set statusBackP24
     *
     * @param string $statusBackP24
     *
     * @return ShopOrder
     */
    public function setStatusBackP24($statusBackP24)
    {
        $this->statusBackP24 = $statusBackP24;

        return $this;
    }

    /**
     * Get statusBackP24
     *
     * @return string
     */
    public function getStatusBackP24()
    {
        return $this->statusBackP24;
    }

    /**
     * Set statusBackP24Time
     *
     * @param \DateTime $statusBackP24Time
     *
     * @return ShopOrder
     */
    public function setStatusBackP24Time($statusBackP24Time)
    {
        $this->statusBackP24Time = $statusBackP24Time;

        return $this;
    }

    /**
     * Get statusBackP24Time
     *
     * @return \DateTime
     */
    public function getStatusBackP24Time()
    {
        return $this->statusBackP24Time;
    }

    /**
     * Set statusVeryfP24
     *
     * @param string $statusVeryfP24
     *
     * @return ShopOrder
     */
    public function setStatusVeryfP24($statusVeryfP24)
    {
        $this->statusVeryfP24 = $statusVeryfP24;

        return $this;
    }

    /**
     * Get statusVeryfP24
     *
     * @return string
     */
    public function getStatusVeryfP24()
    {
        return $this->statusVeryfP24;
    }

    /**
     * Set statusVeryfP24Time
     *
     * @param \DateTime $statusVeryfP24Time
     *
     * @return ShopOrder
     */
    public function setStatusVeryfP24Time($statusVeryfP24Time)
    {
        $this->statusVeryfP24Time = $statusVeryfP24Time;

        return $this;
    }

    /**
     * Get statusVeryfP24Time
     *
     * @return \DateTime
     */
    public function getStatusVeryfP24Time()
    {
        return $this->statusVeryfP24Time;
    }

    /**
     * Set nazwa1
     *
     * @param string $nazwa1
     *
     * @return ShopOrder
     */
    public function setNazwa1($nazwa1)
    {
        $this->nazwa1 = $nazwa1;

        return $this;
    }

    /**
     * Get nazwa1
     *
     * @return string
     */
    public function getNazwa1()
    {
        return $this->nazwa1;
    }

    /**
     * Set adres1
     *
     * @param string $adres1
     *
     * @return ShopOrder
     */
    public function setAdres1($adres1)
    {
        $this->adres1 = $adres1;

        return $this;
    }

    /**
     * Get adres1
     *
     * @return string
     */
    public function getAdres1()
    {
        return $this->adres1;
    }

    /**
     * Set miejscowosc1
     *
     * @param string $miejscowosc1
     *
     * @return ShopOrder
     */
    public function setMiejscowosc1($miejscowosc1)
    {
        $this->miejscowosc1 = $miejscowosc1;

        return $this;
    }

    /**
     * Get miejscowosc1
     *
     * @return string
     */
    public function getMiejscowosc1()
    {
        return $this->miejscowosc1;
    }

    /**
     * Set kod1
     *
     * @param string $kod1
     *
     * @return ShopOrder
     */
    public function setKod1($kod1)
    {
        $this->kod1 = $kod1;

        return $this;
    }

    /**
     * Get kod1
     *
     * @return string
     */
    public function getKod1()
    {
        return $this->kod1;
    }

    /**
     * Set fvat
     *
     * @param string $fvat
     *
     * @return ShopOrder
     */
    public function setFvat($fvat)
    {
        $this->fvat = $fvat;

        return $this;
    }

    /**
     * Get fvat
     *
     * @return string
     */
    public function getFvat()
    {
        return $this->fvat;
    }

    /**
     * Set nip
     *
     * @param string $nip
     *
     * @return ShopOrder
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set nazwa2
     *
     * @param string $nazwa2
     *
     * @return ShopOrder
     */
    public function setNazwa2($nazwa2)
    {
        $this->nazwa2 = $nazwa2;

        return $this;
    }

    /**
     * Get nazwa2
     *
     * @return string
     */
    public function getNazwa2()
    {
        return $this->nazwa2;
    }

    /**
     * Set adres2
     *
     * @param string $adres2
     *
     * @return ShopOrder
     */
    public function setAdres2($adres2)
    {
        $this->adres2 = $adres2;

        return $this;
    }

    /**
     * Get adres2
     *
     * @return string
     */
    public function getAdres2()
    {
        return $this->adres2;
    }

    /**
     * Set kod2
     *
     * @param string $kod2
     *
     * @return ShopOrder
     */
    public function setKod2($kod2)
    {
        $this->kod2 = $kod2;

        return $this;
    }

    /**
     * Get kod2
     *
     * @return string
     */
    public function getKod2()
    {
        return $this->kod2;
    }

    /**
     * Set miejscowosc2
     *
     * @param string $miejscowosc2
     *
     * @return ShopOrder
     */
    public function setMiejscowosc2($miejscowosc2)
    {
        $this->miejscowosc2 = $miejscowosc2;

        return $this;
    }

    /**
     * Get miejscowosc2
     *
     * @return string
     */
    public function getMiejscowosc2()
    {
        return $this->miejscowosc2;
    }

    /**
     * Set uwagi
     *
     * @param string $uwagi
     *
     * @return ShopOrder
     */
    public function setUwagi($uwagi)
    {
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Get uwagi
     *
     * @return string
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ShopOrder
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set p24Clientid
     *
     * @param string $p24Clientid
     *
     * @return ShopOrder
     */
    public function setP24Clientid($p24Clientid)
    {
        $this->p24Clientid = $p24Clientid;

        return $this;
    }

    /**
     * Get p24Clientid
     *
     * @return string
     */
    public function getP24Clientid()
    {
        return $this->p24Clientid;
    }

    /**
     * Set ppReceiverId
     *
     * @param string $ppReceiverId
     *
     * @return ShopOrder
     */
    public function setPpReceiverId($ppReceiverId)
    {
        $this->ppReceiverId = $ppReceiverId;

        return $this;
    }

    /**
     * Get ppReceiverId
     *
     * @return string
     */
    public function getPpReceiverId()
    {
        return $this->ppReceiverId;
    }

    /**
     * Set ppPaymentStatus
     *
     * @param string $ppPaymentStatus
     *
     * @return ShopOrder
     */
    public function setPpPaymentStatus($ppPaymentStatus)
    {
        $this->ppPaymentStatus = $ppPaymentStatus;

        return $this;
    }

    /**
     * Get ppPaymentStatus
     *
     * @return string
     */
    public function getPpPaymentStatus()
    {
        return $this->ppPaymentStatus;
    }

    /**
     * Set ppPaymentDate
     *
     * @param string $ppPaymentDate
     *
     * @return ShopOrder
     */
    public function setPpPaymentDate($ppPaymentDate)
    {
        $this->ppPaymentDate = $ppPaymentDate;

        return $this;
    }

    /**
     * Get ppPaymentDate
     *
     * @return string
     */
    public function getPpPaymentDate()
    {
        return $this->ppPaymentDate;
    }

    /**
     * Set ppTxnId
     *
     * @param string $ppTxnId
     *
     * @return ShopOrder
     */
    public function setPpTxnId($ppTxnId)
    {
        $this->ppTxnId = $ppTxnId;

        return $this;
    }

    /**
     * Get ppTxnId
     *
     * @return string
     */
    public function getPpTxnId()
    {
        return $this->ppTxnId;
    }

    /**
     * Set ppPayerEmail
     *
     * @param string $ppPayerEmail
     *
     * @return ShopOrder
     */
    public function setPpPayerEmail($ppPayerEmail)
    {
        $this->ppPayerEmail = $ppPayerEmail;

        return $this;
    }

    /**
     * Get ppPayerEmail
     *
     * @return string
     */
    public function getPpPayerEmail()
    {
        return $this->ppPayerEmail;
    }

    /**
     * Set idsSession
     *
     * @param string $idsSession
     *
     * @return ShopOrder
     */
    public function setIdsSession($idsSession)
    {
        $this->idsSession = $idsSession;

        return $this;
    }

    /**
     * Get idsSession
     *
     * @return string
     */
    public function getIdsSession()
    {
        return $this->idsSession;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ShopOrder
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set brow
     *
     * @param string $brow
     *
     * @return ShopOrder
     */
    public function setBrow($brow)
    {
        $this->brow = $brow;

        return $this;
    }

    /**
     * Get brow
     *
     * @return string
     */
    public function getBrow()
    {
        return $this->brow;
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
