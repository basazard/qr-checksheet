<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorization = [
            [
                'name' => 'Operator',
                'slug' => 'operator',
            ],
            [
                'name' => 'Auditor',
                'slug' => 'auditor',
            ],
        ];

        DB::table('authorizations')->insert($authorization);
    }
}
