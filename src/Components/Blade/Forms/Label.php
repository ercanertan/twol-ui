<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Forms;

use Ercanertan\TwolUI\Components\BladeComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class Label extends BladeComponent
{
    /** @var string */
    public $for;

    public function __construct(string $for)
    {
        $this->for = $for;
    }

    public function render(): View
    {
        return view('twol-ui::components.forms.label');
    }

    public function fallback(): string
    {
        return Str::ucfirst(str_replace('_', ' ', $this->for));
    }
}
