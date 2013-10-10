<?php

namespace Jejik\AppBundle\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Cmf\Bundle\CoreBundle\PublishWorkflow\PublishableInterface;
use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\Route;
use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;

/**
 * CMS page
 *
 * @PHPCR\Document
 */
class Page extends Route implements RouteReferrersReadInterface, PublishableInterface
{
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
     * @PHPCR\Boolean
     * @var bool
     */
    private $publishable = true;

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

    /**
     * Isser for publishable
     *
     * @return bool
     */
    public function isPublishable()
    {
        return $this->publishable;
    }
    
    /**
     * Setter for publishable
     *
     * @param bool $publishable
     * @return self
     */
    public function setPublishable($publishable = true)
    {
        $this->publishable = $publishable;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {
        return $this;
    }
    
    /**
     * Setter for content
     *
     * @param mixed $content
     * @return self
     */
    public function setContent($content)
    {
        throw new \LogicException('Do not set any content. The page route and content are the same object');
    }

    /**
     * {@inheritDoc}
     */
    public function getRoutes()
    {
        return array($this);
    }
}
