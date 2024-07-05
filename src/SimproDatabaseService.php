<?php
declare(strict_types=1);

namespace StitchDigital\LaravelSimproPostgres;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Facades\DB;

class SimproDatabaseService
{
    protected ConnectionInterface $connection;

    public function setDatabase(string $databaseName): void
    {
        // Set the database name for the pgsql connection
        config(['database.connections.pgsql.database' => $databaseName]);

        // Purge the existing connection to ensure the new database config is used
        DB::purge('pgsql');

        // Reconnect to the database with the new configuration
        $this->connection = DB::connection('pgsql');
    }

    public function executeQuery(string $query, array $bindings = []): array
    {
        return $this->connection->select($query, $bindings);
    }
}
