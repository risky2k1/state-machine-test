<?php

namespace App\Models\States;

use Spatie\ModelStates\Attributes\AllowTransition;
use Spatie\ModelStates\Attributes\DefaultState;
use Spatie\ModelStates\State;
use Spatie\ModelStates\Attributes\RegisterState;

#[
    AllowTransition(Pending::class, Approved::class),
    AllowTransition(Pending::class, Declined::class),
    AllowTransition(Approved::class, Declined::class),
    AllowTransition(Approved::class, Done::class),
    DefaultState(Pending::class),
]
abstract class OrderState extends State
{
    abstract public function color(): string;

    public static function register(): array
    {
        return [
            'pending' => Pending::class,
            'approved' => Approved::class,
            'declined' => Declined::class,
            'done' => Done::class,
        ];
    }
}
