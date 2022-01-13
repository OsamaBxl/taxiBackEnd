<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class PaymentStatus extends Enum
{
    const INIT =   0;
    const SUCCESSFUL =   1;
    const FAILED = -1;
}