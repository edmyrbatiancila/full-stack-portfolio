<?php

namespace App\Enum;

enum CategoryType: string
{
    case PROJECT = 'project';
    case SKILL = 'skill';

    public function label(): string
    {
        return match($this) {
            self::PROJECT => 'Project',
            self::SKILL => 'Skill',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
