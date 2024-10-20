<?php

namespace Database\Seeders;

use App\Enums\TransactionStatusEnum;
use App\Models\TransactionStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionStatus::create(['status' => TransactionStatusEnum::CREATED->value]);
        TransactionStatus::create(['status' => TransactionStatusEnum::ACCEPTED->value]);
        TransactionStatus::create(['status' => TransactionStatusEnum::WAITING->value]);
        TransactionStatus::create(['status' => TransactionStatusEnum::APPROVED->value]);
        TransactionStatus::create(['status' => TransactionStatusEnum::CANCELED->value]);
        TransactionStatus::create(['status' => TransactionStatusEnum::REJECTED->value]);
    }
}
