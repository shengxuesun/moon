<?php

use Illuminate\Database\Seeder;
use App\Org;

class OrgsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Org::create([
            'parent_id' => 0,
            'info' => '{"name":{"zh_CN":"根","us_EN":"Root"},"domain":"pttoo.com"}',
            'auth' => '{"type":"root"}',
            'created_by' => 1,
        ]);

        Org::create([
            'parent_id' => 1,
            'info' => '{"name":"上海牧云玩具设计有限公司","domain":"pttoo.com","short_name":"牧云"}',
            'auth' => '{
                "acccept_admin":true,
                "branches":{}
            }',
            'created_by' => 1,
        ]);
    }
}
