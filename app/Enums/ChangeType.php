<?php

namespace App\Enums;

enum ChangeType: string
{
    case RESTOCK = 'restock';
    case SALE = 'sale';
    case ADJUSTMENT = 'adjustment';
}
