<?php

namespace App\Models\States;

class Done extends OrderState
{
    public static string $name = 'done';

    public function color(): string
    {
        // TODO: Implement color() method.
        return 'yellow';
    }
}
