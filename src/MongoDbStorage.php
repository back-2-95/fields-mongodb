<?php

namespace BackTo95\Fields\MongoDb;

use BackTo95\Fields\Entity\EntityConfiguration;
use BackTo95\Fields\Storage\StorageInterface;
use MongoDB\Client;
use MongoDB\Collection;

class MongoDbStorage implements StorageInterface
{
    protected $mongodb;

    public function __construct(Client $mongodb)
    {
        $this->mongodb = $mongodb;
    }

    public function getEntityConfiguration(string $entity) : EntityConfiguration
    {
        $configuration = $this->getCollection()->findOne(['entity' => $entity]);

        return new EntityConfiguration($configuration);
    }

    protected function getCollection() : Collection
    {
        return $this->mongodb->selectCollection('demo', 'entity_configurations');
    }

    public function storeEntityConfiguration(EntityConfiguration $configuration) : bool
    {
        $entity = $configuration->getName();
        $data = $configuration->getArrayCopy();

        $result = $this->getCollection()->updateOne(['entity' => $entity], $data);

        return ($result->getModifiedCount() === 1);
    }
}
