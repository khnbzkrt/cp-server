<?php

namespace App\Enums;

enum PaymentStatusEnum: string
{
    case APPROVED = "APPROVED";
    case PENDING = "PENDING";
    case CANCELED = "CANCELED";
}
