<?php

namespace App\Models\States;

class Approved extends OrderState
{
    public static string $name = 'approved';
    public function color(): string
    {
        // TODO: Implement color() method.
        return 'red';
    }
}
