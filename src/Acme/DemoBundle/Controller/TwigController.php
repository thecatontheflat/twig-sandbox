<?php

namespace Acme\DemoBundle\Controller;

use Acme\DemoBundle\Model\SomeObject;
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
     * @Route("/asset-version")
     * @Template()
     */
    public function assetVersionAction()
    {
        return [];
    }

    /**
     * @Route("/internal-controller")
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

    /**
     * @Route("/default-filter")
     * @Template()
     */
    public function defaultFilterAction()
    {
        return [
            'variable' => 111
        ];
    }

    /**
     * @Route("/loops")
     * @Template()
     */
    public function loopsAction()
    {
        return [];
    }

    /**
     * @Route("/include-with")
     * @Template()
     */
    public function includeWithAction()
    {
        return [
            'text' => 'Content of variable text',
            'text2' => 'Another content of variable text2',
            'text3' => 'Additional content of variable text3',
        ];
    }

    /**
     * @Route("/getter")
     * @Template()
     */
    public function objectGetterAction()
    {
        $someObject = new SomeObject();
        return [
            'object' => $someObject
        ];
    }
}
