<?php

use App\Enum\GroupEnum;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('groups')) {
            DB::table('users')->truncate();
            DB::table('groups')->truncate();

            Schema::drop('groups');
        }

        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'group_id')) {
                return;
            }

            $table->foreignIdFor(Group::class);
        });

        $groups = Group::insert([
            [
                'name' => GroupEnum::ADMIN,
            ],
            [
                'name' => GroupEnum::CMS,
            ],
            [
                'name' => GroupEnum::USER,
            ],
        ]);

        $adminGroup = Group::whereName(GroupEnum::ADMIN)->first();

        /* @var User */
        $admin = User::updateOrcreate([
            'name' => 'admin',
            'email' => 'admin@homer.test',
            'password' => Hash::make('.Admin-123'),
            'group_id' => $adminGroup->id,
        ]);
    }
};
