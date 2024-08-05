<?php

namespace StitchDigital\LaravelSimproPostgres\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

abstract class PostgresModel extends Model
{
    protected $connection;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setConnectionFromConfig();
    }

    protected function setConnectionFromConfig()
    {
        // Load the configuration
        $config = Config::get('laravel-simpro-postgres.database');

        // Register the dynamic connection
        Config::set('database.connections.simpro', $config);

        // Set the connection
        $this->connection = 'simpro';
    }

    public $timestamps = false;

    /**
     * @throws Exception
     */
    public function save(array $options = [])
    {
        throw new Exception("This model is read-only.");
    }

    /**
     * @throws Exception
     */
    public function update(array $attributes = [], array $options = [])
    {
        throw new Exception("This model is read-only.");
    }

    /**
     * @throws Exception
     */
    public function performDeleteOnModel()
    {
        throw new Exception("This model is read-only.");
    }

    /**
     * @throws Exception
     */
    public function delete()
    {
        throw new Exception("This model is read-only.");
    }

    /**
     * @throws Exception
     */
    public function forceDelete()
    {
        throw new Exception("This model is read-only.");
    }

    /**
     * @throws Exception
     */
    public function restore()
    {
        throw new Exception("This model is read-only.");
    }

    /**
     * @throws Exception
     */
    public function replicate(array $except = null)
    {
        throw new Exception("This model is read-only.");
    }
}