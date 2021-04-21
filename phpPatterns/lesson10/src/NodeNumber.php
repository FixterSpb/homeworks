<?php


class NodeNumber implements NodeCalculate
{
    private float $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    public function calc(): float
    {
        return $this->value;
    }
}