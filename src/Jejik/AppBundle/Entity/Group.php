<?php

namespace Jejik\AppBundle\Entity;

use Sonata\UserBundle\Entity\BaseGroup as SonataGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="grp")
 */
class Group extends SonataGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
