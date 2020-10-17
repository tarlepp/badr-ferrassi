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
        $json = <<<JSON
{
  "header": {
    "error": 0,
    "message": "ok",
    "next": 2
  },
  "results": [
    {
      "id": 17007,
      "title": "test article title 1"
    },
    {
      "id": 17008,
      "title": "sample article 2"
    }
  ]
}
JSON;

        $articles = $serializer->deserialize(json_encode(json_decode($json)->results), Article::class . '[]', 'json');

        dd($articles);
    }
}
