<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lerning
 *
 * @ORM\Table(name="lerning", uniqueConstraints={@ORM\UniqueConstraint(name="NewIndex1", columns={"ID_USER", "ID_LECTION", "ID_DICTIONARY"})}, indexes={@ORM\Index(name="FK_lerning2", columns={"ID_DICTIONARY"}), @ORM\Index(name="IDX_BE0616E4F8371B55", columns={"ID_USER"})})
 * @ORM\Entity
 */
class Lerning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_LECTION", type="smallint", nullable=false)
     */
    private $idLection;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DICTIONARY", type="integer", nullable=false)
     */
    private $idDictionary;

    /**
     * @var integer
     *
     * @ORM\Column(name="WORD_STATUS", type="smallint", nullable=true)
     */
    private $wordStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="REPEAD_COUNT", type="smallint", nullable=true)
     */
    private $repeadCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="EXAM", type="smallint", nullable=true)
     */
    private $exam;

    /**
     * @var integer
     *
     * @ORM\Column(name="EXAM_BUFOR", type="smallint", nullable=true)
     */
    private $examBufor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANSWER_OK", type="integer", nullable=true)
     */
    private $answerOk;

    /**
     * @var integer
     *
     * @ORM\Column(name="ANSWER_ERR", type="integer", nullable=true)
     */
    private $answerErr;

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
     * Set idLection
     *
     * @param integer $idLection
     *
     * @return Lerning
     */
    public function setIdLection($idLection)
    {
        $this->idLection = $idLection;

        return $this;
    }

    /**
     * Get idLection
     *
     * @return integer
     */
    public function getIdLection()
    {
        return $this->idLection;
    }

    /**
     * Set idDictionary
     *
     * @param integer $idDictionary
     *
     * @return Lerning
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
     * Set wordStatus
     *
     * @param integer $wordStatus
     *
     * @return Lerning
     */
    public function setWordStatus($wordStatus)
    {
        $this->wordStatus = $wordStatus;

        return $this;
    }

    /**
     * Get wordStatus
     *
     * @return integer
     */
    public function getWordStatus()
    {
        return $this->wordStatus;
    }

    /**
     * Set repeadCount
     *
     * @param integer $repeadCount
     *
     * @return Lerning
     */
    public function setRepeadCount($repeadCount)
    {
        $this->repeadCount = $repeadCount;

        return $this;
    }

    /**
     * Get repeadCount
     *
     * @return integer
     */
    public function getRepeadCount()
    {
        return $this->repeadCount;
    }

    /**
     * Set exam
     *
     * @param integer $exam
     *
     * @return Lerning
     */
    public function setExam($exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return integer
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set examBufor
     *
     * @param integer $examBufor
     *
     * @return Lerning
     */
    public function setExamBufor($examBufor)
    {
        $this->examBufor = $examBufor;

        return $this;
    }

    /**
     * Get examBufor
     *
     * @return integer
     */
    public function getExamBufor()
    {
        return $this->examBufor;
    }

    /**
     * Set answerOk
     *
     * @param integer $answerOk
     *
     * @return Lerning
     */
    public function setAnswerOk($answerOk)
    {
        $this->answerOk = $answerOk;

        return $this;
    }

    /**
     * Get answerOk
     *
     * @return integer
     */
    public function getAnswerOk()
    {
        return $this->answerOk;
    }

    /**
     * Set answerErr
     *
     * @param integer $answerErr
     *
     * @return Lerning
     */
    public function setAnswerErr($answerErr)
    {
        $this->answerErr = $answerErr;

        return $this;
    }

    /**
     * Get answerErr
     *
     * @return integer
     */
    public function getAnswerErr()
    {
        return $this->answerErr;
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
     * @return Lerning
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
