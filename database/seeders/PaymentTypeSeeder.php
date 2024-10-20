<?php

namespace Database\Seeders;

use App\Enums\PaymentTypeEnum;
use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentType::create(['status' => PaymentTypeEnum::DEPOSITED->value]);
        PaymentType::create(['status' => PaymentTypeEnum::WITHDRAWAL->value]);
        PaymentType::create(['status' => PaymentTypeEnum::EARNED->value]);
        PaymentType::create(['status' => PaymentTypeEnum::PAID->value]);
    }
}
