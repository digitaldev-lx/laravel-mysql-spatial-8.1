<?php

namespace DigitalDevLX\LaravelMySqlSpatial\Eloquent;

use DigitalDevLX\LaravelMySqlSpatial\Types\GeometryInterface;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class Builder extends EloquentBuilder
{
    public function update(array $values)
    {
        foreach ($values as $key => &$value) {
            if ($value instanceof GeometryInterface) {
                $value = $this->asWKT($value);
            }
        }

        return parent::update($values);
    }

    protected function asWKT(GeometryInterface $geometry)
    {
        return new SpatialExpression($geometry);
    }
}
