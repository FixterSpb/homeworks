<?php

include_once "./News.php";

class Page
{
    private string $html;
    private News $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function setHtml(string $html)
    {
        $this->html = $html;
    }

    public function getHtml(): string
    {
        return $this->html;
    }

    public function getNews(): News
    {
        return $this->news;
    }
}