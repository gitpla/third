<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translate
 *
 * @ORM\Table(name="translate", indexes={@ORM\Index(name="NewIndex1", columns={"ID_DICTIONARY", "LANG"})})
 * @ORM\Entity
 */
class Translate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DICTIONARY", type="integer", nullable=false)
     */
    private $idDictionary;

    /**
     * @var integer
     *
     * @ORM\Column(name="LANG", type="integer", nullable=false)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSLATE", type="string", length=256, nullable=true)
     */
    private $translate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idDictionary
     *
     * @param integer $idDictionary
     *
     * @return Translate
     */
    public function setIdDictionary($idDictionary)
    {
        $this->idDictionary = $idDictionary;

        return $this;
    }

    /**
     * Get idDictionary
     *
     * @return integer
     */
    public function getIdDictionary()
    {
        return $this->idDictionary;
    }

    /**
     * Set lang
     *
     * @param integer $lang
     *
     * @return Translate
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return integer
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set translate
     *
     * @param string $translate
     *
     * @return Translate
     */
    public function setTranslate($translate)
    {
        $this->translate = $translate;

        return $this;
    }

    /**
     * Get translate
     *
     * @return string
     */
    public function getTranslate()
    {
        return $this->translate;
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
