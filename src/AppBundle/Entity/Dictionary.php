<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dictionary
 *
 * @ORM\Table(name="dictionary", indexes={@ORM\Index(name="NewIndex1", columns={"WORDS"})})
 * @ORM\Entity
 */
class Dictionary
{
    /**
     * @var integer
     *
     * @ORM\Column(name="LECTION", type="smallint", nullable=true)
     */
    private $lection;

    /**
     * @var string
     *
     * @ORM\Column(name="WORDS", type="string", length=256, nullable=true)
     */
    private $words;

    /**
     * @var string
     *
     * @ORM\Column(name="BAD", type="string", length=1, nullable=true)
     */
    private $bad;

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSLATE", type="string", length=256, nullable=true)
     */
    private $translate;

    /**
     * @var string
     *
     * @ORM\Column(name="SPEAK", type="string", length=256, nullable=true)
     */
    private $speak;

    /**
     * @var string
     *
     * @ORM\Column(name="SPEAK2", type="string", length=256, nullable=true)
     */
    private $speak2;

    /**
     * @var string
     *
     * @ORM\Column(name="SPEAK3", type="string", length=32, nullable=true)
     */
    private $speak3;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set lection
     *
     * @param integer $lection
     *
     * @return Dictionary
     */
    public function setLection($lection)
    {
        $this->lection = $lection;

        return $this;
    }

    /**
     * Get lection
     *
     * @return integer
     */
    public function getLection()
    {
        return $this->lection;
    }

    /**
     * Set words
     *
     * @param string $words
     *
     * @return Dictionary
     */
    public function setWords($words)
    {
        $this->words = $words;

        return $this;
    }

    /**
     * Get words
     *
     * @return string
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Set bad
     *
     * @param string $bad
     *
     * @return Dictionary
     */
    public function setBad($bad)
    {
        $this->bad = $bad;

        return $this;
    }

    /**
     * Get bad
     *
     * @return string
     */
    public function getBad()
    {
        return $this->bad;
    }

    /**
     * Set translate
     *
     * @param string $translate
     *
     * @return Dictionary
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
     * Set speak
     *
     * @param string $speak
     *
     * @return Dictionary
     */
    public function setSpeak($speak)
    {
        $this->speak = $speak;

        return $this;
    }

    /**
     * Get speak
     *
     * @return string
     */
    public function getSpeak()
    {
        return $this->speak;
    }

    /**
     * Set speak2
     *
     * @param string $speak2
     *
     * @return Dictionary
     */
    public function setSpeak2($speak2)
    {
        $this->speak2 = $speak2;

        return $this;
    }

    /**
     * Get speak2
     *
     * @return string
     */
    public function getSpeak2()
    {
        return $this->speak2;
    }

    /**
     * Set speak3
     *
     * @param string $speak3
     *
     * @return Dictionary
     */
    public function setSpeak3($speak3)
    {
        $this->speak3 = $speak3;

        return $this;
    }

    /**
     * Get speak3
     *
     * @return string
     */
    public function getSpeak3()
    {
        return $this->speak3;
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
