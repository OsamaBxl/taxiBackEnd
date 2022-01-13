<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class RefundStatus extends Enum
{
    const INIT =   0;
    const SUCCESSFUL =   1;
    const PENDING = 2;
    const FAILED = -1;
}