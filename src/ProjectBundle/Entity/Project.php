<?php

namespace ProjectBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Enhavo\Bundle\MediaBundle\Model\FileInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project implements ResourceInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    /**
     * @var FileInterface
     */
    protected $file;

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
     * Set author
     *
     * @param string $author
     * @return Project
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Project
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
     * Set file
     *
     * @param $file FileInterface|null
     */
    public function setFile(FileInterface $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return FileInterface|null
     */
    public function getFile()
    {
        return $this->file;
    }

}
