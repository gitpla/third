<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stati
 *
 * @ORM\Table(name="stati")
 * @ORM\Entity
 */
class Stati
{
    /**
     * @var string
     *
     * @ORM\Column(name="CONTENT", type="string", length=256, nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATATIME", type="datetime", nullable=false)
     */
    private $datatime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="PAGE", type="string", length=9, nullable=true)
     */
    private $page;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set content
     *
     * @param string $content
     *
     * @return Stati
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
     * Set datatime
     *
     * @param \DateTime $datatime
     *
     * @return Stati
     */
    public function setDatatime($datatime)
    {
        $this->datatime = $datatime;

        return $this;
    }

    /**
     * Get datatime
     *
     * @return \DateTime
     */
    public function getDatatime()
    {
        return $this->datatime;
    }

    /**
     * Set page
     *
     * @param string $page
     *
     * @return Stati
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
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
