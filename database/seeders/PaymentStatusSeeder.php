<?php

namespace Database\Seeders;

use App\Enums\PaymentStatusEnum;
use App\Models\PaymentStatus;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentStatus::create(['status'=> PaymentStatusEnum::APPROVED->value]);
        PaymentStatus::create(['status'=> PaymentStatusEnum::PENDING->value]);
        PaymentStatus::create(['status'=> PaymentStatusEnum::CANCELED->value]);
    }
}
