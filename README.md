# back-2-95/fields-mongodb

MongoDB storage adapter for back-2-95/fields

![Travis CI](https://api.travis-ci.org/back-2-95/fields-mongodb.svg?branch=master)

## What should this library do? ##

- Use MongoDb for storing Entities handled by \BackTo95\Fields API (create own storage adapter for it)

## API

Create API and set MongoDB storage:

```PHP
$api = new \BackTo95\Fields\Api();
$client = new \MongoDB\Client;
$storage = new \BackTo95\Fields\MongoDb\MongoDbStorage($client, 'database', 'collection');
$api->setStorage($storage);
```
