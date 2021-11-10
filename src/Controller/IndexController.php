<?php

namespace App\Controller;

use App\Model\Article;
use App\Model\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class IndexController
{
    /**
     * @Route("/", name="")
     */
    public function __invoke(SerializerInterface $serializer)
    {
        $csv = <<<CSV
id;title
17007;test
17008;sample ddasdf
17008;sample test
CSV;

        $articles = $serializer->deserialize($csv, Article::class . '[]', 'csv', ['csv_delimiter' => ';', 'csv_headers' => ['id', 'title']]);

        dd($articles);
    }
}
