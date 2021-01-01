<?php

namespace Database\Seeders;

use App\Models\Models\Opportunity;
use App\Models\Models\OpportunityDetail;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opportunity::factory(200)->create()->each(function ($opportunity) {
            $opportunity->detail()->save(OpportunityDetail::factory()->make());
        });
    }
}
