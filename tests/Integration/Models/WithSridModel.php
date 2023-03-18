<?php

use DigitalDevLX\LaravelMySqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithSridModel.
 *
 * @property int                                          id
 * @property \DigitalDevLX\LaravelMySqlSpatial\Types\Point      location
 * @property \DigitalDevLX\LaravelMySqlSpatial\Types\LineString line
 * @property \DigitalDevLX\LaravelMySqlSpatial\Types\LineString shape
 */
class WithSridModel extends Model
{
    use SpatialTrait;

    protected $table = 'with_srid';

    protected $spatialFields = ['location', 'line'];

    public $timestamps = false;
}
