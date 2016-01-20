<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lections
 *
 * @ORM\Table(name="lections")
 * @ORM\Entity
 */
class Lections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LANGUAGE", type="integer", nullable=false)
     */
    private $idLanguage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LANG_TRANSLATE", type="integer", nullable=false)
     */
    private $idLangTranslate;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=258, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idLanguage
     *
     * @param integer $idLanguage
     *
     * @return Lections
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    /**
     * Get idLanguage
     *
     * @return integer
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }

    /**
     * Set idLangTranslate
     *
     * @param integer $idLangTranslate
     *
     * @return Lections
     */
    public function setIdLangTranslate($idLangTranslate)
    {
        $this->idLangTranslate = $idLangTranslate;

        return $this;
    }

    /**
     * Get idLangTranslate
     *
     * @return integer
     */
    public function getIdLangTranslate()
    {
        return $this->idLangTranslate;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Lections
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
