<?php


class ArticleDetails implements IController
{

    public function render(array $GET, array $POST): void
    {
        $articlesContainer = new ArticleContainer();

        //select current article based on GET
        $article = null;

        foreach ($articlesContainer->GetAll() as $item)
        {
           if ($item->CompareSlug($GET[GET_ARTICLE_SLUG]))
           {
               $article = $item;
           }
        }

        // render header and head
        require "view/includes/Head.php";
        require "view/includes/Header.php";

        // render page contents
        include "view/ArticleDetailView.php";

        //render footer
        require "view/includes/Footer.php";
    }
}