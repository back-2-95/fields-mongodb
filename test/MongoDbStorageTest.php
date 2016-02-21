<?php

namespace BackTo95Test\Fields\MongoDb;

use BackTo95\Fields\API;
use BackTo95\Fields\MongoDb\MongoDbStorage;
use BackTo95\Fields\Storage\FileStorage;
use BackTo95Test\Fields\ExampleEntityConfigurationTrait;
use MongoDB\Client;
use PHPUnit_Framework_TestCase as TestCase;

class MongoDbStorageTest extends TestCase
{
   // use ExampleEntityConfigurationTrait;

    /** @var API Fields API */
    protected $api;

    public function setUp()
    {
        $this->api = new API();
    }

    public function testSetStorage()
    {
        $client = new Client();
        $storage = new MongoDbStorage($client, 'test', 'entity_configurations');
        $this->api->setStorage($storage);

        $this->assertInstanceOf(MongoDbStorage::class, $this->api->getStorage());
    }
}
