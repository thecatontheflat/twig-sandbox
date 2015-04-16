<?php

namespace LearningBundle\Model;

use Faker;

class ArticleFactory
{
    public static function createArticle()
    {
        $faker = Faker\Factory::create();
        $article = new Article();
        $article->setAuthor($faker->name);
        $article->setTitle($faker->sentence());
        $article->setSubTitle(implode(' ', $faker->sentences()));
        $article->setText($faker->text());
        $article->setPublicationDate($faker->dateTimeThisMonth->format('Y-m-d'));

        return $article;
    }

    public static function createArrayOfArticles($amount)
    {
        $articles = [];
        for ($i = 0; $i < $amount; $i++) {
            $articles[] = self::createArticle();
        }

        return $articles;
    }
}