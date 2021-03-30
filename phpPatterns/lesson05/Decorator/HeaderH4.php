<?php

include_once  "./Decorator.php";

class HeaderH4 extends Decorator
{

    public function render(): string
    {
        return "<h4>" . str_replace('###', '', $this->content->render()) . "</h4>";
    }
}