<?php

namespace app\src;

interface IEditAction
{
    public function edit();
    public function undo();
}