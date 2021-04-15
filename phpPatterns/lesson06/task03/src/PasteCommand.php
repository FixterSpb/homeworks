<?php


namespace app\src;


class PasteCommand extends Command
{
    private string $subString = '';
    private int $lengthPastedString;

    public function execute(string $text): string
    {
//        echo `START: ${this->start}; END: ${this->end}`, PHP_EOL;
        if (!is_null($this->end) && $this->start <= $this->end) {
            $this->subString = mb_substr($text,  $this->start, $this->end - $this->start);
            echo "При вставке удаляется этот кусок: ", PHP_EOL, $this->subString, PHP_EOL;
        }
        $this->lengthPastedString = $this->clipboard->length();

        return mb_substr($text, 0, $this->start) . $this->clipboard->get() . mb_substr($text, $this->end);
    }

    public function unExecute($text): string
    {
        echo "Начало: ", PHP_EOL, mb_substr($text, 0, $this->start), PHP_EOL, PHP_EOL;
        echo "Строка, удаленная при вставке: ", PHP_EOL, $this->subString, PHP_EOL, PHP_EOL;
        echo "Незатронутая часть тектса: ", PHP_EOL, mb_substr($text, $this->start + $this->lengthPastedString), PHP_EOL, PHP_EOL;
        return mb_substr($text, 0, $this->start) . $this->subString .  mb_substr($text, $this->start + $this->lengthPastedString);
    }
}