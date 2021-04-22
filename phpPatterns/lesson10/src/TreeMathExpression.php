<?php

require_once "NodeCalculate.php";

class TreeMathException implements NodeCalculate, JsonSerializable
{

    public function calc(): float
    {
        // TODO: Implement calc() method.
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}