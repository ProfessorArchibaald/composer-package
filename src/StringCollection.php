<?php

declare(strict_types = 1);

namespace ProfessorArchibaald\ComposerPackage;

class StringCollection
{
    public static function countStringLength(string $value): string 
    {
        return 'Длинна строки - ' . strlen($value);
    }
}
