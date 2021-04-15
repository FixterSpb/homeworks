<?php

namespace app\src;

class CutCommand extends Command
{

    public function execute(string $text): string
    {
        $subString = mb_substr($text, $this->start, $this->end - $this->start);
        $this->clipboard->set($subString);
        return mb_substr($text, 0, $this->start) .  mb_substr($text, $this->end);
    }
}