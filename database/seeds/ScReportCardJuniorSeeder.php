<?php

use Illuminate\Database\Seeder;
use App\Models\ScReportCardJunior;

class ScReportCardJuniorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            ScReportCardJunior::create([
                'sc_study_id' => $i,
                'score' => '89',
                'kkm_k3' => '75',
                'kkm_k4' => '70',
                'k3_ph' => '80',
                'k3_pts' => '90',
                'k4_pr' => '100',
                'status' => 'success',
                'predicate' => 'A'
            ]);
        }
    }
}
