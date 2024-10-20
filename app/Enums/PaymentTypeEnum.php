<?php

namespace App\Enums;

enum PaymentTypeEnum : string
{
    case DEPOSITED = "DEPOSITED";
    case WITHDRAWAL = "WITHDRAWAL";
    case EARNED = "EARNED";
    case PAID = "PAID";
}
