<?php

use DigitalDevLX\LaravelMySqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeometryModel.
 *
 * @property int                                          id
 * @property \DigitalDevLX\LaravelMySqlSpatial\Types\Point      location
 * @property \DigitalDevLX\LaravelMySqlSpatial\Types\LineString line
 * @property \DigitalDevLX\LaravelMySqlSpatial\Types\LineString shape
 */
class GeometryModel extends Model
{
    use SpatialTrait;

    protected $table = 'geometry';

    protected $spatialFields = ['location', 'line', 'multi_geometries'];
}
