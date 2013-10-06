<?php

namespace Jejik\AppBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * CMS page
 *
 * @PHPCR\Document
 */
class Page
{
    /**
     * @PHPCR\Id(strategy="parent")
     */
    private $id;

    /**
     * @PHPCR\Parentdocument
     */
    private $parent;

    /**
     * @PHPCR\Nodename
     */
    private $name;

    /**
     * @PHPCR\Children
     */
    private $children;

    /**
     * @PHPCR\String
     * @var string
     */
    private $title;

    /**
     * @PHPCR\String
     * @var string
     */
    private $body;

    /**
     * Getter for id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Getter for parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * Setter for parent
     *
     * @param string $parent
     * @return self
     */
    public function setParent($parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Setter for name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for children
     *
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Getter for title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Setter for title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Getter for body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
    
    /**
     * Setter for body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
}
