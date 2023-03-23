<?php

namespace App\Models\States;

class Declined extends OrderState
{
    public static string $name = 'declined';

    public function color(): string
    {
        // TODO: Implement color() method.
        return 'blue';
    }
}
