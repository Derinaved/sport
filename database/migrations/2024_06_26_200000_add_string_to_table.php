<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert(
            array(
                'id' => 1,
                'name' => 'TEST',
                'item' => 'Алгебра',
                'email' => 'test@test.test',
                'password' => 1,
            ),
        );
        DB::table('users')->insert(
            array(
                'id' => 2,
                'name' => 'Олежка',
                'item' => 'Химия',
                'email' => 'test@test2.test',
                'password' => 1,
            ),
        );
        DB::table('groups')->insert(
            array(
                'id' => 1,
                'title' => 'И-21-1',
                'user_id' => 1,
            )
        );
        DB::table('groups')->insert(
            array(
                'id' => 2,
                'title' => 'И-21-2',
                'user_id' => 1,
            ),
        );
        DB::table('groups')->insert(
            array(
                'id' => 3,
                'title' => 'И-21-3',
                'user_id' => 1,
            ),
        );
        DB::table('students')->insert(
            array(
                'id' => 1,
                'groups_id' => '1',
                'name' => 'Бочкарев Даниил',
                'spec' => 'Web',
                'birthday' => 20050628,
                'address' => 'test',
                'phone' => '23121ew',
                'inn' => 111111,
                'pasport' => 31124,
            ),
        );
        DB::table('students')->insert(
            array(
                'id' => 2,
                'groups_id' => '1',
                'name' => 'Бывальцев Тимур',
                'spec' => 'Web',
                'birthday' => 20050114,
                'address' => 'test',
                'phone' => '23121ew',
                'inn' => 21341,
                'pasport' => 12314,
            ),
        );
        DB::table('students')->insert(
            array(
                'id' => 3,
                'groups_id' => '3',
                'name' => 'Волков Алексей',
                'spec' => 'Web',
                'birthday' => 20050725,
                'address' => 'test',
                'phone' => '23121ew',
                'inn' => 32141,
                'pasport' => 51251,
            ),
        );
        DB::table('students')->insert(
            array(
                'id' => 4,
                'groups_id' => '1',
                'name' => 'Галлямшин Богдан',
                'spec' => 'Web',
                'birthday' => 20050325,
                'address' => 'test',
                'phone' => '23121ew',
                'inn' => 23141,
                'pasport' => 23123124,
            ),
        );
        DB::table('students')->insert(
            array(
                'id' => 5,
                'groups_id' => '2',
                'name' => 'Палабугин Даниил',
                'spec' => 'Web',
                'birthday' => 20050423,
                'address' => 'test',
                'phone' => '2313123',
                'inn' => 213141,
                'pasport' => 315351,
            ),
        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_groups');
    }
};
