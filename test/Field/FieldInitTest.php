<?php

namespace BackTo95Test\MongoDbCrud;

use PHPUnit_Framework_TestCase as TestCase;
use BackTo95\MongoDbCrud\Field\FieldInterface;
use BackTo95\MongoDbCrud\Field\Text;

class FieldInitTest extends TestCase
{
    public function testFieldClassInstanceOf()
    {
        $field = new Text;
        $this->assertInstanceOf(FieldInterface::class, $field);
    }
}
