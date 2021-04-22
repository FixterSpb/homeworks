<?php

    require "./NodeExpression.php";

//    echo (new NodeExpression(" "))->calc() . PHP_EOL;
//
//    echo substr("(+1)", 1, strlen("(+1)") - 2) . PHP_EOL;
//
//    echo preg_match("/\(*\d+\.*\d*([\+-\/*]\d+\.*\d*)+\)*([\^*\/]\(?\d+\.*\d*([\+-\/*]\d+\.*\d*)*\)?+)*[+-]/", '27/2*7*5*20/(3+(7+5))', $out), PHP_EOL;
//    print_r($out);
//
//    echo preg_match("/^\d+\.*\d*([\/*]\d+\.*\d*)?[+-]/", '27*(20-3)*(7+5)', $out), PHP_EOL;
//
//    print_r($out);
//
//    echo preg_match("/^\d+\.*\d*([\/*]\d+\.*\d*)?[*\/]/", '27*(20-3)*(7+5)', $out), PHP_EOL;
//
//    print_r($out);
//
//    echo strpos("/[+-]/", "1+2-3"), PHP_EOL;

//    echo preg_match_all("/\d+\.*\d*|[\+-\/*\(\)\^]/", '25*2-10+20/(4+(4^2))', $out), PHP_EOL;
//    print_r($out[0]);

//    $countBrackets = 1;
//    $maxPriority = 0;
//    $actionIndex = 0;
//    $priorities = [
//        "+" => 3,
//        "-" => 3,
//        "*" => 2,
//        "/" => 2,
//        "^" => 1
//    ];
//
//    foreach ($out[0] as $key => $value){
//        if (preg_match("/\d+\.*\d*/", $value)){
//            continue;
//        }
//
//        if ($value === '('){
//            $countBrackets++;
//            continue;
//        }
//
//        if ($value === ')'){
//            $countBrackets--;
//            continue;
//        }
//
//        $priority = $priorities[$value] / $countBrackets;
//        if($priority >= $maxPriority){
//            $maxPriority = $priority;
//            $actionIndex = $key;
//        }
//
//    }

//    echo "key = $actionIndex; action = " . $out[0][$actionIndex] . PHP_EOL;

    preg_match_all("/\d+\.*\d*|[\+-\/*\(\)\^]/", '27/2*7*5*(20+7-3*16/2+37-12)/(3+(7+5))', $out);
    header("Access-Control-Allow-Origin: *");
    echo json_encode(new NodeExpression($out[0]));
//
//    $tokens = ["(", "1"];
//    echo PHP_EOL . implode(preg_grep("/\d+\.?\d*/", $tokens)) . PHP_EOL;