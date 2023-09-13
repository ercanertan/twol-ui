<?php

declare(strict_types=1);

namespace Ercanertan\TwolUI\Components\Blade\Forms\Inputs;

use Illuminate\Contracts\View\View;

class Password extends Input
{
    public function __construct(string $name = 'password', string $id = null)
    {
        parent::__construct($name, $id, 'password');
    }

    public function render(): View
    {
        return view('twol-ui::components.forms.inputs.password');
    }
}
