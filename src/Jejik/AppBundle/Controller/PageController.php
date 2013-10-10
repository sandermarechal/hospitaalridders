<?php

namespace Jejik\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * PageController
 *
 * @see Controller
 */
class PageController extends Controller
{
    /**
     * indexAction
     *
     * @Template
     *
     * @return array
     */
    public function showAction($contentDocument)
    {
        return array(
            'page' => $contentDocument,
        );
    }
}
