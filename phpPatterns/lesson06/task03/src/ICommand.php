<?php

namespace app\src;

interface ICommand
{
    public function execute();
    public function unExecute();
}