# What is this?

Just a quick demo how to use Symfony `Serializer` component.

## Question

Someone asked following on Symfony Slack workspace;

```
Hello,
i follow the Serializer component documentation, to turn specific json into object
https://symfony.com/doc/current/components/serializer.html#deserializing-an-object
I make this call to receive a list of objects.
$response = $httpClient->request('GET', 'https://www.example.com/web/app.php/api/articles?next=1&Type=ep');
dump($response->getContent());
So I have an list of Article Objects.

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

I would like to deserialize the results part... The problem is that the Symfony Serializer gives me one null object

$encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];
$serializer = new Serializer($normalizers, $encoders);
$articles = $serializer->deserialize($response, Articles::class, 'json');
dump($articles);

what is the probleme please ?
```

So this repository contains simple example how to make that happen

## Authors

* [Tarmo Leppänen](https://github.com/tarlepp)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2020 Tarmo Leppänen
