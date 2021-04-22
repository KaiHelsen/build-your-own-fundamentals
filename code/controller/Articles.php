<?php
declare(strict_types=1);

class Articles implements IController
{

    public function render(array $GET, array $POST): void
    {
        $container = new ArticleContainer();
        $articles = $container->GetAll();

        //compose basic GET structure to redirect to detail view of article
        $detailRef = GET_PAGE . '=' . ARTICLE_DETAIL . '&' . GET_ARTICLE_SLUG . '=' ;

        // render header and head
        require "view/includes/Head.php";
        require "view/includes/Header.php";

        // render page contents
        include "view/ArticlesView.php";

        //render footer
        require "view/includes/Footer.php";
    }
}