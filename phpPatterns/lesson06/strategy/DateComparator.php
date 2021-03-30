<?php

include_once "./IComparator.php";

class DateComparator implements IComparator
{

    public function compare(array $news)
    {
        echo "Сравниваем по дате";
    }
}