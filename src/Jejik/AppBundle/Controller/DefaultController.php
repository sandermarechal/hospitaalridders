<?php

namespace Jejik\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DefaultController
 *
 * @see Controller
 */
class DefaultController extends Controller
{
    /**
     * indexAction
     *
     * @Route("/")
     * @Template
     *
     * @return array
     */
    public function indexAction()
    {
        return array();
    }
}
