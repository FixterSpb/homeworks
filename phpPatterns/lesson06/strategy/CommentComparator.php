<?php

include_once "./IComparator.php";

class CommentComparator implements IComparator
{

    public function compare(array $news)
    {
        echo "Сравниваем по количеству комментариев";
    }
}