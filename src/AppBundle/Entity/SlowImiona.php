<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SlowImiona
 *
 * @ORM\Table(name="slow_imiona")
 * @ORM\Entity
 */
class SlowImiona
{
    /**
     * @var string
     *
     * @ORM\Column(name="imie", type="string", length=765, nullable=true)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="odmiana", type="string", length=765, nullable=true)
     */
    private $odmiana;

    /**
     * @var string
     *
     * @ORM\Column(name="plec", type="string", length=3, nullable=true)
     */
    private $plec;

    /**
     * @var integer
     *
     * @ORM\Column(name="sylaby", type="smallint", nullable=true)
     */
    private $sylaby;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set imie
     *
     * @param string $imie
     *
     * @return SlowImiona
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
     * Set odmiana
     *
     * @param string $odmiana
     *
     * @return SlowImiona
     */
    public function setOdmiana($odmiana)
    {
        $this->odmiana = $odmiana;

        return $this;
    }

    /**
     * Get odmiana
     *
     * @return string
     */
    public function getOdmiana()
    {
        return $this->odmiana;
    }

    /**
     * Set plec
     *
     * @param string $plec
     *
     * @return SlowImiona
     */
    public function setPlec($plec)
    {
        $this->plec = $plec;

        return $this;
    }

    /**
     * Get plec
     *
     * @return string
     */
    public function getPlec()
    {
        return $this->plec;
    }

    /**
     * Set sylaby
     *
     * @param integer $sylaby
     *
     * @return SlowImiona
     */
    public function setSylaby($sylaby)
    {
        $this->sylaby = $sylaby;

        return $this;
    }

    /**
     * Get sylaby
     *
     * @return integer
     */
    public function getSylaby()
    {
        return $this->sylaby;
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
