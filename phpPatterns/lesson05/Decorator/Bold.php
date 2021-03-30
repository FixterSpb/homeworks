<?php

include_once "./Decorator.php";

class Bold extends Decorator
{

    public function render(): string
    {
        return "<b>" . str_replace('**', '', $this->content->render()) . "</b>";
    }
}