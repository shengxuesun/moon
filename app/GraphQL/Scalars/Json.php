<?php

namespace App\GraphQL\Scalars;

use GraphQL\Error\Error;
use GraphQL\Utils\Utils;
use Safe\Exceptions\JsonException;
use GraphQL\Type\Definition\ScalarType;

/**
 * Read more about scalars here http://webonyx.github.io/graphql-php/type-system/scalar-types/
 */
class Json extends ScalarType
{
        /**
     * Serializes an internal value to include in a response.
     */
    public function serialize($value): string
    {
        return \Safe\json_encode($value);
    }

    /**
     * Parses an externally provided value (query variable) to use as an input.
     *
     * In the case of an invalid value this method must throw an Exception
     *
     *
     * @throws Error
     */
    public function parseValue($value)
    {
        return $this->decodeJSON($value);
    }

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input.
     *
     * In the case of an invalid node or value this method must throw an Exception
     *
     * @param Node $valueNode
     * @param mixed[]|null $variables
     *
     * @throws Exception
     */
    public function parseLiteral($valueNode, ?array $variables = null)
    {
        if (!property_exists($valueNode, 'value')) {
            throw new Error(
                'Can only parse literals that contain a value, got '.Utils::printSafeJson($valueNode)
            );
        }

        return $this->decodeJSON($valueNode->value);
    }

    /**
     * Try to decode a user-given value into JSON.
     *
     *
     * @throws Error
     */
    protected function decodeJSON($value)
    {
        try {
            $parsed = \Safe\json_decode($value);
        } catch (JsonException $jsonException) {
            throw new Error(
                $jsonException->getMessage()
            );
        }

        return $parsed;
    }
}
