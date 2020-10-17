<?php
declare(strict_types = 1);

namespace App\Model;

class Response
{
    /**
     * @var Header
     */
    public Header $header;

    /**
     * @var Article[]
     */
    public array $results;

    public function getArticles(): array
    {
        return $this->results;
    }
}
