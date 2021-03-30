<?php

include_once  "./IMarkdown.php";

abstract class Decorator implements IMarkdown
{

    protected ?IMarkdown $content = null;

    public function __construct(IMarkdown $content)
    {
        $this->content = $content;
    }
}