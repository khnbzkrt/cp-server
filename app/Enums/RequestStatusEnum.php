<?php

namespace App\Enums;

enum RequestStatusEnum: string
{
    case PENDING = "pending";
    case ACCEPTED = "accepted";
    case COMPLETED = "completed";
    case REJECTED = "rejected";
}
