<?php


namespace app\src;


class Copy extends EditAction
{
    public function edit()
    {
        $this->clipboard->set();
    }

    public function undo()
    {
        // TODO: Implement undo() method.
    }
}