<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components;

use Livewire\Component;

abstract class LivewireComponent extends Component
{
    /** @var array */
    protected static $assets = [];

    public static function assets(): array
    {
        return static::$assets;
    }
}
