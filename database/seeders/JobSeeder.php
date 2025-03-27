<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load Jobs from File
        $jobsListing = include database_path('seeders/data/job_listings.php');

        // Get User ids from the User Model
        $user_Ids = User::pluck('id')->toArray(); // Correct the typo here (toArray)

        foreach ($jobsListing as &$listing) { // Use reference to modify array directly
            // Assign user to id
            $listing['user_id'] = $user_Ids[array_rand($user_Ids)];
            // Add Timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // Insert jobs into the database
        DB::table('jobs_listings')->insert($jobsListing);

        echo "Data inserted Successfully";
    }
}
