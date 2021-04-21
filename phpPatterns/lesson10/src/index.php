<?php

    require "./NodeExpression.php";

    echo (new NodeExpression(" "))->calc() . PHP_EOL;

    echo substr("(+1)", 1, strlen("(+1)") - 2) . PHP_EOL;

    echo preg_match("/^\(\d+[\+-\/*]\d+\)/", '(27+2)-3*(7+5)', $out), PHP_EOL;

    print_r($out);
