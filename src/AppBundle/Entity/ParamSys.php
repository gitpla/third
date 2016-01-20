<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamSys
 *
 * @ORM\Table(name="param_sys")
 * @ORM\Entity
 */
class ParamSys
{
    /**
     * @var string
     *
     * @ORM\Column(name="NAME_", type="string", length=96, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="VALUE_", type="string", length=48, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=384, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return ParamSys
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return ParamSys
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ParamSys
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
