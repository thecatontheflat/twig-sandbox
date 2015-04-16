<?php

namespace LearningBundle\Controller;

use LearningBundle\Model\ArticleFactory;
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
        $articles = ArticleFactory::createArrayOfArticles(15);

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
