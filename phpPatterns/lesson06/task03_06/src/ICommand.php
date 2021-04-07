<?php

namespace app\src;

interface ICommand
{
    public function execute(string $text): string;
}