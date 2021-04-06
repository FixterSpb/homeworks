<?php


namespace app\src;

use app\src\Clipboard;

abstract class EditAction implements IEditAction
{
    protected int $start = 0;
    protected int $end = 0;
    protected int $length;
    protected Clipboard $clipboard;

    public function __construct(int $start, int $end){
        $this->start = $start;
        $this->end = $end;
        $this->length = $end - $start;
        $this->clipboard = Clipboard::getInstance();
    }

}