<?php

namespace Tests\TestClasses;

use Swis\LaravelApi\JsonSchemas\BaseApiSchema;

class TestSchema extends BaseApiSchema
{
    public function getRepositoryClassName()
    {
        return TestRepository::class;
    }
}
