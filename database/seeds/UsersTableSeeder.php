<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'org_ids' => json_decode('[{"org_id":1,"owner":true},{"org_id":2}]',true),
            'ids' => '{"mobile":{"val":"17821621090","active":true},"email":{"val":"kris@viirose.com","active":true}}',
            'password' => bcrypt('kingking'),
            'info' => '{"name":"倪昌盛","nick_name":"Kris"}',
            'auth' => '{"type":"root"}',
            'created_by' => 0,
        ]);

        User::create([
            'org_ids' => json_decode('[{"org_id":1},{"org_id":2, "assistant":true}]',true),
            'ids' => '{"mobile":{"val":"18912372103","active":true},"email":{"val":"1457501757@qq.com","active":true}}',
            'password' => bcrypt('123456'),
            'info' => '{"name":"姚远","nick_name":"Golden"}',
            'auth' => null,
            'created_by' => 1,
        ]);

        User::create([
            'org_ids' => json_decode('[{"org_id":1},{"org_id":2}]',true),
            'ids' => '{"mobile":{"val":"13951195320","active":true},"email":{"val":"bella@viirose.com","active":true}}',
            'password' => bcrypt('123456'),
            'info' => '{"name":"仲一玲","nick_name":"Bella"}',
            'auth' => null,
            'created_by' => 1,
        ]);

        User::create([
            'org_ids' => json_decode('[{"org_id":2, "assistant":true}]',true),
            'ids' => '{"mobile":{"val":"18912372103","active":true},"email":{"val":"2402856790@qq.com","active":true}}',
            'password' => bcrypt('123456'),
            'info' => '{"name":"戴玉","nick_name":"Flora"}',
            'auth' => null,
            'created_by' => 1,
        ]);

        User::create([
            'org_ids' => json_decode('[{"org_id":2, "owner":true}]',true),
            'ids' => '{"mobile":{"val":"13761058983","active":true}}',
            'password' => null,
            'info' => '{"name":"鲁娴婷","nick_name":"Fanny"}',
            'auth' => null,
            'created_by' => 1,
        ]);

        User::create([
            'org_ids' => json_decode('[{"org_id":2, "assistant":true}]',true),
            'ids' => '{"mobile":{"val":"18701782407","active":true},"email":{"val":"july@mooitoys.com","active":true}}',
            'password' => null,
            'info' => '{"name":"吕洁","nick_name":"July"}',
            'auth' => null,
            'created_by' => 1,
        ]);

        User::create([
            'org_ids' => json_decode('[{"org_id":2, "assistant":true}]',true),
            'ids' => '{"mobile":{"val":"15911599729","active":true}}',
            'password' => null,
            'info' => '{"name":"蒋海明","nick_name":"Joe"}',
            'auth' => null,
            'created_by' => 1,
        ]);

    }
}
