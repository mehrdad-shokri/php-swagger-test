<?php

namespace Test;

use ByJG\Swagger\SwaggerSchema;
use PHPUnit\Framework\TestCase;

class SwaggerBodyTestCase extends TestCase
{

    /**
     * @param bool $allowNullValues
     * @return SwaggerSchema
     */
    protected static function swaggerSchema($allowNullValues = false)
    {
        return new SwaggerSchema(
            self::getSwaggerJsonContent(),
            $allowNullValues
        );
    }

    /**
     * @return string
     */
    protected static function getSwaggerJsonContent()
    {
        return file_get_contents(__DIR__ . '/example/swagger.json');
    }
}