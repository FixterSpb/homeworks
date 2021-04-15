<?php


namespace app\src;


class CopyCommand implements ICommand
{
    protected int $start;
    protected ?int $end;
    protected Clipboard $clipboard;

    public function __construct(int $start, ?int $end =null)
    {
        $this->end = $end;
        $this->start = $start - 1;
        $this->clipboard = Clipboard::getInstance();
    }

    public function execute(string $text): string
    {
        $subString = mb_substr($text, $this->start, $this->end - $this->start);
        $this->clipboard->set($subString);
        return $text;
    }
}