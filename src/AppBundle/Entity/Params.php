<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Params
 *
 * @ORM\Table(name="params", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"ID_USER", "PARAMS"})}, indexes={@ORM\Index(name="IDX_8FCE0EF3F8371B55", columns={"ID_USER"})})
 * @ORM\Entity
 */
class Params
{
    /**
     * @var string
     *
     * @ORM\Column(name="PARAMS", type="string", length=32, nullable=true)
     */
    private $params;

    /**
     * @var string
     *
     * @ORM\Column(name="VALS", type="string", length=32, nullable=true)
     */
    private $vals;

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
     * Set params
     *
     * @param string $params
     *
     * @return Params
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set vals
     *
     * @param string $vals
     *
     * @return Params
     */
    public function setVals($vals)
    {
        $this->vals = $vals;

        return $this;
    }

    /**
     * Get vals
     *
     * @return string
     */
    public function getVals()
    {
        return $this->vals;
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
     * @return Params
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
