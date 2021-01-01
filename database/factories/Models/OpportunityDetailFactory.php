<?php

namespace Database\Factories\Models;

use App\Models\Models\OpportunityDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpportunityDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*
            $table->unsignedBigInteger('opportunity_id');
            $table->mediumText('benefits');
            $table->mediumText('application_process');
            $table->mediumText('further_queries');
            $table->mediumText('eligibilities');
            $table->string('official_link')->nullable();
            $table->json('eligible_regions')->nullable();
         */
        return [
            'benefits' => $this->faker->text(600),
            'application_process' => $this->faker->text(400),
            'further_queries' => $this->faker->text(400),
            'eligibilities' => $this->faker->text(500),
            'official_link' => $this->faker->url,
        ];
    }
}
