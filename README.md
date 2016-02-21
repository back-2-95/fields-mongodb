# back-2-95/fields-mongodb

CRUD library for storing stuff to MongoDB with PHP7

Testing... Testing Packagist auto-update....

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
