<?php

namespace App\Enums;

enum EnemyAction: int
{
    case Attack = 1;
    case Defend = 2;
    case Skill = 3;
}
