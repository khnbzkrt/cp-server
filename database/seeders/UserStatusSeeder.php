<?php

namespace Database\Seeders;

use App\Enums\UserStatusEnum;
use App\Models\UserStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserStatus::create(['status' => UserStatusEnum::ACTIVE->value]);
        UserStatus::create(['status' => UserStatusEnum::SUSPENDED->value]);
        UserStatus::create(['status' => UserStatusEnum::DELETED->value]);
    }
}
