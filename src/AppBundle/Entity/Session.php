<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="SESS_JSON", type="string", length=1024, nullable=true)
     */
    private $sessJson;

    /**
     * @var string
     *
     * @ORM\Column(name="KEYSSY", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyssy;



    /**
     * Set sessJson
     *
     * @param string $sessJson
     *
     * @return Session
     */
    public function setSessJson($sessJson)
    {
        $this->sessJson = $sessJson;

        return $this;
    }

    /**
     * Get sessJson
     *
     * @return string
     */
    public function getSessJson()
    {
        return $this->sessJson;
    }

    /**
     * Get keyss
     *
     * @return string
     */
    public function getKeyssy()
    {
        return $this->keyssy;
    }
}
