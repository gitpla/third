<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", indexes={@ORM\Index(name="FK_photos", columns={"ID_USER"})})
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var string
     *
     * @ORM\Column(name="FIRST", type="string", length=3, nullable=true)
     */
    private $first;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FOTO", type="string", length=192, nullable=true)
     */
    private $idFoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_TIME", type="datetime", nullable=false)
     */
    private $dataTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO_DESCRIPTION", type="string", length=765, nullable=true)
     */
    private $photoDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="COUNTER", type="integer", nullable=true)
     */
    private $counter;

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
     * Set first
     *
     * @param string $first
     *
     * @return Photos
     */
    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set idFoto
     *
     * @param string $idFoto
     *
     * @return Photos
     */
    public function setIdFoto($idFoto)
    {
        $this->idFoto = $idFoto;

        return $this;
    }

    /**
     * Get idFoto
     *
     * @return string
     */
    public function getIdFoto()
    {
        return $this->idFoto;
    }

    /**
     * Set dataTime
     *
     * @param \DateTime $dataTime
     *
     * @return Photos
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
     * Set photoDescription
     *
     * @param string $photoDescription
     *
     * @return Photos
     */
    public function setPhotoDescription($photoDescription)
    {
        $this->photoDescription = $photoDescription;

        return $this;
    }

    /**
     * Get photoDescription
     *
     * @return string
     */
    public function getPhotoDescription()
    {
        return $this->photoDescription;
    }

    /**
     * Set counter
     *
     * @param integer $counter
     *
     * @return Photos
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return integer
     */
    public function getCounter()
    {
        return $this->counter;
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
     * @return Photos
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
