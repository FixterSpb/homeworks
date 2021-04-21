<?php

require "./NodeCalculate.php";


class NodeExpression implements NodeCalculate
{
    public const ACTIONS = [
        "+" => "addition",
        "-" => "subtraction",
        "/" => "division",
        "*" => "multiplication",
        "^" => "exponentiation",
    ];

    private string $expression;
    private NodeCalculate $left;
    private NodeCalculate $right;
    private string $action;

    public function __construct(string $expression)
    {
        $this->expression = trim($expression);
        $this->parse($expression);
    }

    public function calc(): float
    {
        $action = self::ACTIONS['^'];
        return self::$action(10, 2);
    }

    private function parse(string $expression)
    {
        $leftExpression = '';
        if($expression[0] === '(')
        {
            $leftExpression = $this->parseBrackets($expression);
        }


        if (preg_match("/[\+-]/", $expression)){
            if($pos = strpos($expression, '+')){
                $leftExpression .= substr($expression, 0, $pos - 1);
            }else{

            }
        }
        if ($expression[0] === '(') {
            $pos = strpos($expression, ')');
            if ($pos < strlen($expression) - 1) {//Часть выражения заключено в скоби
                $leftExpression = substr($expression, 1, $pos - 1);
                $this->left = new NodeExpression();


            } else { //Все выражение заключено в скобки
                $this->parse(substr($expression), 1, strlen(substr() - 2));
            }
        } else {//Если не скобка, значит число

        }

    }


    private function parseBrackets(string &$expression)
    {
        $result = '';
        if ($expression[0] === '(') {
            $pos = strpos($expression, ')');
            $result = substr($expression[0], 0, $pos);
            $expression = substr($expression, $pos + 1);
        }
        return $result;
    }

    private function parseMulti(string &$expressiont){

    }

    private static function addition(float $a, float $b): float
    {
        return $a + $b;
    }

    private static function subtraction(float $a, float $b): float
    {
        return $a - $b;
    }

    private static function multiplication(float $a, float $b): float
    {
        return $a * $b;
    }

    private static function division(float $a, float $b): float
    {
        return $a / $b;
    }

    private static function exponentiation(float $a, float $b): float
    {
        return $a ** $b;
    }
}