<?php

namespace LearningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RefactoringController extends Controller
{
    /**
     * @Route("/refactoring/articles")
     * @Template()
     */
    public function articlesAction()
    {
        return [];
    }

    /**
     * @Route("/refactoring/articles/{id}")
     * @Template()
     */
    public function articlesDetailAction($id)
    {
        return [];
    }
}
