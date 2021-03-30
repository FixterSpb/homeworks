<?php


class News
{
    private string $text;

    public function getText(): string{
        return $this->text;
    }

    public function setText(string $text){
        $this->text = $text;
    }
}