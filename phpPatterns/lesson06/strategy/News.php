<?php


class News
{
    private DateTime $createdAt;
    private int $totalCommentsCount;

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getTotalCommentsCount(): int
    {
        return $this->totalCommentsCount;
    }
}