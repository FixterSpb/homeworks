<?php

include_once  "./IMarkdown.php";


class HtmlRender implements IMarkdown
{

    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return htmlspecialchars($this->text);
    }
}