<?php

namespace CGC\CoreBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Alan Jhonnes <aj@alanjhonnes.com>
 * @ORM\Entity(repositoryClass="CGC\CoreBundle\Entity\ContentRepository")
 * @ORM\Table(name="content")
 */
class Content {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    protected $key_name;
    
    
    /**
     * @ORM\Column(type="string", length=10000)
     * @var string
     */
    protected $content;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    protected $section;
    

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
     * Set key_name
     *
     * @param string $keyName
     * @return Content
     */
    public function setKeyName($keyName)
    {
        $this->key_name = $keyName;

        return $this;
    }

    /**
     * Get key_name
     *
     * @return string 
     */
    public function getKeyName()
    {
        return $this->key_name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Content
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
     * Set section
     *
     * @param string $section
     * @return Content
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }
    
    public function __toString() {
        return $this->key_name;
    }
}
