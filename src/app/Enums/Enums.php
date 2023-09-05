<?php

namespace App\Enums;

class Status
{
    const PAID = 'paid';
    const PENDING = 'pending';
    const DECLINE = 'decline';

    // look up table
    public const ALL_STATUS = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINE => 'Decline'
    ];
}
