<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stickers
 *
 * @ORM\Table(name="stickers", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"ID_USER", "CONTENT"})}, indexes={@ORM\Index(name="IDX_D88DAC16F8371B55", columns={"ID_USER"})})
 * @ORM\Entity
 */
class Stickers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER2", type="integer", nullable=true)
     */
    private $idUser2;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_READ", type="string", length=3, nullable=true)
     */
    private $statusRead;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="SOURCE", type="string", length=3, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="POSITION", type="string", length=27, nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=3, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="string", length=210, nullable=true)
     */
    private $content;

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
     * Set idUser2
     *
     * @param integer $idUser2
     *
     * @return Stickers
     */
    public function setIdUser2($idUser2)
    {
        $this->idUser2 = $idUser2;

        return $this;
    }

    /**
     * Get idUser2
     *
     * @return integer
     */
    public function getIdUser2()
    {
        return $this->idUser2;
    }

    /**
     * Set statusRead
     *
     * @param string $statusRead
     *
     * @return Stickers
     */
    public function setStatusRead($statusRead)
    {
        $this->statusRead = $statusRead;

        return $this;
    }

    /**
     * Get statusRead
     *
     * @return string
     */
    public function getStatusRead()
    {
        return $this->statusRead;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Stickers
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Stickers
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Stickers
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Stickers
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Stickers
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
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
     * @return Stickers
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
