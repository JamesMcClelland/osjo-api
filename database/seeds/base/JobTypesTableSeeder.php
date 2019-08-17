<?php

namespace Seeds\Base;

use App\Models\JobType;
use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery = new JobType();
        $delivery->type = 'Delivery';
        $delivery->save();

        $collection = new JobType();
        $collection->type = 'Collection';
        $collection->save();
    }
}
