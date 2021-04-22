<?php
declare(strict_types=1);

class ArticleContainer
{
    private array $articles = [];

    public function __construct()
    {
        //populate article array with a series of fresh articles
        $this->articles[] = Article::NewArticle(
            'Cake Ipsum',
            'Soufflé marzipan bear claw marshmallow pastry chocolate bar topping. Jelly biscuit cotton candy pudding sweet roll cupcake. Jelly-o oat cake candy canes cotton candy cake caramels. Carrot cake chocolate cake bear claw apple pie chocolate bar gummi bears pastry brownie.'
        );
        $this->articles[] = Article::NewArticle(
            'Tiramisu muffin macaroon',
            'Soufflé marzipan bear claw marshmallow pastry chocolate bar topping. Jelly biscuit cotton candy pudding sweet roll cupcake. Jelly-o oat cake candy canes cotton candy cake caramels. Carrot cake chocolate cake bear claw apple pie chocolate bar gummi bears pastry brownie.'
        );
        $this->articles[] = Article::NewArticle(
            'Koen sleep statistics',
            'We are still waiting for dataContainer to come him. He might have fallen asleep while sending them.'
        );
        $this->articles[] = Article::NewArticle(
            'Lamarr 4 breaks coding world record',
            'We don\'t know how they managed it, but they sure did.'
        );
    }

    public function GetAll(): array
    {
        return $this->articles;
    }

    public function AddArticle(Article $article): void
    {
        $articles[] = $article;
    }

    public function GetBySlug(string $slug): ?Article
    {
        foreach ($this->articles as $article)
        {
            if ($article->CompareSlug($slug))
            {
                return $article;
            }
        }
        return null;
    }
}