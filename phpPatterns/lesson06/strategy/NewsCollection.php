<?php

include_once "./IComparator.php";

class NewsCollection
{
    public function sort(IComparator $comparator, array $news): array
    {
        echo 'Некоторая бизнес-логика';
        return $comparator->compare($news);
    }
}