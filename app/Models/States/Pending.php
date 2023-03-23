<?php

namespace App\Models\States;

class Pending extends OrderState
{
    public static string $name ='pending';
    public function color(): string
    {
        return 'green';
    }
}
