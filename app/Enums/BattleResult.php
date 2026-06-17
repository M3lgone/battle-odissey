<?php

namespace App\Enums;

enum BattleResult: string
{
    case Win = 'win';
    case Loss = 'loss';
    case Flee = 'flee';
}
