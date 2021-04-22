<?php

declare(strict_types=1);

include_once('controller/IController.php');
include('controller/Articles.php');
include('controller/ArticleDetails.php');
include('controller/Home.php');
include('controller/Products.php');

include('dataContainer/ArticleContainer.php');
include('dataContainer/ProductsContainer.php');

include('model/Article.php');
include('model/Product.php');

//TODO: disable before publishing
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//library of constants
const GET_PAGE = 'page';
const GET_ARTICLE_SLUG = 'article-slug';

const ARTICLES = 'articles';
const PRODUCTS = 'products';
const ARTICLE_DETAIL = 'article-detail';
//MVC entry point
$controller = new Home();
if (!empty($_GET['page']))
{
    //switch function which helps define what page we go to.
    //also means that if the page is not defined in this list, we just go back to the home page.
    //we could add an error or not found page and link it in the default case
    //but this is fine for now

    $controller = match ($_GET[GET_PAGE])
    {
        ARTICLES => new Articles(),
        PRODUCTS => new Products(),
        ARTICLE_DETAIL => new ArticleDetails(),
    };
}

$controller->render($_GET, $_POST);