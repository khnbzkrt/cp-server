<?php

namespace App\Enums;

enum TransactionStatusEnum : string
{
    case CREATED = "CREATED";
    case ACCEPTED = "ACCEPTED";
    case WAITING = "WAITING";
    case APPROVED = "APPROVED";
    case CANCELED = "CANCELED";
    case REJECTED = "REJECTED";
}
