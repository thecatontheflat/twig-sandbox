<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TwigController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/internal-controller", name="internalControllerDemo")
     * @Template()
     */
    public function internalControllerDemoAction()
    {
        return [];
    }

    /**
     * @Route("/esi", name="includedESIAction")
     * @Template()
     */
    public function includedESIAction()
    {
        return [];
    }
}
