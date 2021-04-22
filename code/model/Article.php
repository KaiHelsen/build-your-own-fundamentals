<?php
declare(strict_types=1);

class Article
{
    private static int $idCounter = 0;
    private int $id;
    private string $title;
    private string $slug;
    private string $content;

    private function __construct(string $title, string $slug, string $content)
    {
        $this->id = self::$idCounter;
        self::$idCounter++;

        $this->title = $title;
        $this->slug = $slug;
        $this->content = $content;

    }

    public static function NewArticle(string $title, string $content) : Article {
        $slug = implode('_', explode(' ', $title));
        return new Article($title, $slug, $content);
    }

    public function GetId() : int
    {
        return $this->id;
    }
    public function GetTitle() : string
    {
        return $this->title;
    }

    public function GetSlug() : string
    {
        return $this->slug;
    }

    public function GetContent() : string
    {
        return $this->content;
    }

    public function CompareSlug(string $slug) : bool
    {
        return $this->slug === $slug;
    }
}