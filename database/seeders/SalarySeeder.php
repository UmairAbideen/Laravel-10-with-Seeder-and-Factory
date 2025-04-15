<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salary;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ========== Without Chunking ============================

        $startTime = microtime(true);

        Salary::factory()->count(50000)->create();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;
        echo "Time taken to insert 50,000 rows: $executionTime seconds\n";



        // ========== With Chunking ===============================

        // Start the timer to measure the execution time of the entire process
        $startTime = microtime(true);

        $chunkSize = 5000;
        $totalRows = 50000;
        $chunks = $totalRows / $chunkSize;

        for ($i = 0; $i < $chunks; $i++) {
            // For each iteration, generate and insert a chunk of rows into the database
            Salary::factory()->count($chunkSize)->create();
        }

        // End the timer after all rows have been inserted
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        echo "Time taken to insert 50,000 rows in chunks of 5,000: $executionTime seconds\n";
    }
}
