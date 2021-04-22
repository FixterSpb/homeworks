<?php

require "./NodeCalculate.php";
require "./NodeNumber.php";


class NodeExpression implements NodeCalculate, JsonSerializable
{
    public const ACTIONS = [
        "+" => "addition",
        "-" => "subtraction",
        "/" => "division",
        "*" => "multiplication",
        "^" => "exponentiation",
    ];

    private string $expression;
    private ?NodeCalculate $left = null;
    private ?NodeCalculate $right = null;
    private string $action = '';

    public function __construct(array $tokens)
    {
        $this->expression = implode(' ', $tokens);
        if (preg_grep("/[\+\-*\/]/", $tokens)){
            $this->init($tokens);
        }

    }

    public function calc(): float
    {
        $action = self::ACTIONS['^'];
        return self::$action(10, 2);
    }

    private function init(array $tokens){
        $posAction = $this->getPosAction($tokens);
        $this->action = $tokens[$posAction];
        $leftTokens = array_slice($tokens, 0, $posAction);
        $rightTokens = array_slice($tokens, $posAction + 1);
//        print_r($leftTokens);
//        print_r($rightTokens);
        if (!preg_grep("/[\+-\/*\^]/", $leftTokens)){
            $value = implode(preg_grep("/\d+\.?\d*/", $leftTokens));
            $this->left = new NodeNumber($value);
        }else{

            $this->left = new NodeExpression($leftTokens);
        }


        if (!preg_grep("/[\+-\/*\^]/", $rightTokens)){
            $value = implode(preg_grep("/\d+\.?\d*/", $rightTokens));
            $this->right = new NodeNumber($value);
        }else{
            $this->right = new NodeExpression($rightTokens);
        }
    }

    private function getPosAction(array $tokens): int{
        $countBrackets = 0;
        $maxPriority = 0;
        $actionIndex = 0;
        $priorities = [
            "+" => 3,
            "-" => 3,
            "*" => 2,
            "/" => 2,
            "^" => 1
        ];

        foreach ($tokens as $key => $value){
            if (preg_match("/\d+\.*\d*/", $value)){
                continue;
            }

            if ($value === '('){
                $countBrackets++;
                continue;
            }

            if ($value === ')'){
                $countBrackets--;
                continue;
            }

            $priority = $priorities[$value] - 3 * $countBrackets;
            if($priority >= $maxPriority){
                $maxPriority = $priority;
                $actionIndex = $key;
            }

        }

        return $actionIndex;
    }

//    private function parse(string $expression)
//    {
//
//
//    }
//
//    private function parseExpression(string &$expression): string{
//        $result = '';
//        if ($expression[0] === '(') {
//            return $this->parseBrackets($expression);
//        }
//
//        return $this->parseNumber($expression);
//    }
//
//    private function parseNumber(string &$expression): string{
//
//    }
//
//    private function parseBrackets(string &$expression)
//    {
//        $result = '';
//        $countBrackets = 1;
//        $pos = 1;
//        $len = strlen($expression);
//        while ($countBrackets !== 0 && $pos < $len) {
//            $posOpenBracket = strpos($expression, '(', $pos) ?: $len;
//            $posCloseBracket = strpos($expression, ')', $pos);
//            if ($posCloseBracket < $posOpenBracket) {
//                $pos = $posCloseBracket;
//                $countBrackets--;
//            } else {
//                $pos = $posOpenBracket;
//                $countBrackets++;
//            }
//        }
//
//        if ($pos === $len - 1){//Если все выражение заключено в скобки
//            $expression = substr($expression, 1, $pos - 1);
//            return $this->parseExpression($expression);
//        }
//        // Сейчас $pos указывает на последнюю закрывающую скобку - если скобки вложены
//        // Теперь надо найти знак + или -
//        $leftExpression = substr($expression, 0, $pos);
//        $expression = substr($expression, $pos + 1);
//        if ($expression[0] === '+' || $expression[0] === '-')
//            return $result;
//
//    }
//
//    private function parseMulti(string &$expressiont)
//    {
//
//    }

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

    public function jsonSerialize()
    {
        return [
           "type" => "expression",
           "left" =>$this->left,
           "right" => $this->right,
           "action" => $this->action,
           "expression" => $this->expression
        ];
    }
}