<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RunSqlFiles extends Command
{
    protected $signature = 'db:run-sql-files';
    protected $description = 'Run SQL files from the database/sql directory';

    public function handle()
    {
        $sqlFiles = File::files(database_path('sql'));

        // Sort files by name
        usort($sqlFiles, function ($a, $b) {
            return strcmp($a->getFilename(), $b->getFilename());
        });

        foreach ($sqlFiles as $file) {
            $sql = File::get($file);
            DB::unprepared($sql);
            $this->info("Executed: {$file->getFilename()}");
        }

        $this->info('All SQL files have been executed.');
    }
}
